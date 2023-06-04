<?php
/**
 * @file providing the service that gives the node Id from Node table'.
 *
*/
namespace  Drupal\entries;
use Drupal\Core\Database\Connection;
use Drupal\node\Entity\Node;
use Drupal\Core\Form\FormBuilder;

class GetDataServices {

  private $Database;

	public function __construct(Connection $connection) {
	 $this->database = $connection;
	}
  
  /**
    * Returns list of nids from node table according to passed user id.
  */
  public function drupalise() {

  	$query = $this->database->select('node_field_data', 'nodefd');
  	$query->fields('nodefd', ['nid','title','type']);
  	$query->condition('nodefd.uid',1,'=');
  	$result = $query->execute()->fetchAll();
    // return the result
    return $result;
  }
}
