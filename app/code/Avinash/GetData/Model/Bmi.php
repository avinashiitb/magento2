<?php
namespace Avinash\GetData\Model;
use Avinash\GetData\Api\GetInterface;

class Bmi implements GetInterface
{
    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Users name.
     * @return string Greeting message with users name.
     */
    public function name($name) {
        // return "Hello, " . $name;
        $username =$name;
        //Customize the code as per your requirement.

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('bmi_data');

        $sql = "Select * From " . $tableName . " WHERE username = '".$username."'";
        $connection->query($sql);
        $record = $connection->fetchAll($sql);
        return $record;
    }
}
