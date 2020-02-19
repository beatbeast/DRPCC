 <?php
class Event {
    private $title;
    private $description;    
    private $startDate;
    private $endDate;
    private $Capacity;
    private $locationID;
    
    public function __construct($id, $title, $description, $sDate, $eDate, $Capacity, $locID) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->startDate = $sDate;
        $this->endDate = $eDate;
        $this->Capacity = $Capacity;
        $this->locationID = $locID;
    }
    
    public function getId() { return $this->id; }
    public function getTitle() { return $this->title; }
    public function getDescription() { return $this->description; }
    public function getStartDate() { return $this->startDate; }
    public function getEndDate() { return $this->endDate; }
    public function getCapacity() { return $this->Capacity; }
    public function getLocationID() { return $this->locationID; }
}
?>