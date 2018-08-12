<?php
namespace App\Controllers;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\Models\Entity\Notice;

class NoticeController {
  /**
  * Container Class
  * @var [object]
  */
  private $container;
  /**
   * Undocumented function
   * @param [object] $container
   */
  public function __construct($container) {
      $this->container = $container;
  }
  
  /**
   * List notice
   * @param [type] $request
   * @param [type] $response
   * @param [type] $args
   * @return Response
   */
  public function listNotice($request, $response, $args) {
    $entityManager = $this->container->get('em');
    $noticeRepository = $entityManager->getRepository('App\models\entity\notice');
    $notices = $noticeRepository->findAll();
    $return = $response->withJson($notices, 200)
        ->withHeader('Content-type', 'application/json');
    return $return;        
  }

  /**
   * Create a notice
   * @param [type] $request
   * @param [type] $response
   * @param [type] $args
   * @return Response
   */
  public function createNotice($request, $response, $args) {
    $params = (object) $request->getParams();
    $entityManager = $this->container->get('em');
    $notice = (new Notice())->setText($params->text)
        ->setAuthor($params->author)
        ->setDate(date_create());
    
    $entityManager->persist($notice);
    $entityManager->flush();
    $return = $response->withJson($notice, 201)
        ->withHeader('Content-type', 'application/json');
    return $return;       
  }
}