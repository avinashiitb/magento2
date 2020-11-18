<?php
namespace Avinash\AddData\Model;
use Avinash\AddData\Api\PostInterface;

class Bmi implements PostInterface
{
  /**
   * Returns greeting message to user
   *
   * @api
   * @param array[] $data.
   * @return string Greeting message with users name.
   */
    public function setData($data)
    {
      $username =$data["username"];
      $height = $data["height"];
      $weight = $data["weight"];
      $age = $data["age"];
      $bmi = $data["bmi"];
      //Customize the code as per your requirement.

      $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
      $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
      $connection = $resource->getConnection();
      $tableName = $resource->getTableName('bmi_data');

      $sql = "Insert Into " . $tableName . " (username, height, weight, age, bmi) Values ('".$username."', '".$height."', '".$weight."', '".$age."', '".$bmi."')";
      $connection->query($sql);
      return "Data saved";
    }
}
