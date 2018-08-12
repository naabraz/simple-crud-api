<?php
  namespace App\Models\Entity;
  /**
  * @Entity @Table(name="notice")
  **/
  class Notice {
    /**
     * @var int
     * @Id @Column(type="integer") 
     * @GeneratedValue
     */
    public $id;

    /**
     * @var text
     * @Column(type="text") 
     */
    public $text;

    /**
     * @var string
     * @Column(type="string") 
     */
    public $author;

    /**
     * @var datetime
     * @Column(type="datetime") 
     */
    public $date;

    /**
     * @return int id
     */
    public function getId(){
      return $this->id;
    }

    /**
     * @return text text
     */
    public function getText(){
      return $this->text;
    }

    /**
     * @return string author
     */
    public function getAuthor() {
      return $this->author;
    }

    /**
    * @return datetime date
    */
    public function getDate() {
      return $this->date;
    }

    /**
     * @return Book()
     */

    public function setText($text) {
      if (!$text) {
        throw new \InvalidArgumentException("Text is required", 400);
      }
      
      $this->text = $text;
      return $this;  
    }

    /**
    * @return Book()
    */
    public function setAuthor($author) {
      if (!$author && !is_string($author)) {
        throw new \InvalidArgumentException("Author is required", 400);
      }
      
      $this->author = $author;
      return $this;
    }

    /**
    * @return Book()
    */
    public function setDate($date) {
      $this->date = $date;
      return $this;
    }

    /**
    * @return Book()
    */
    public function getValues() {
      return get_object_vars($this);
    }
  }