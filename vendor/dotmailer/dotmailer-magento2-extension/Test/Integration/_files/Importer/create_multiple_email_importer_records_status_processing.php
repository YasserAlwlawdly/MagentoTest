<?php

use Magento\Framework\Serialize\Serializer\Json;

$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();

$importerResourceModel = $objectManager->create(\Dotdigitalgroup\Email\Model\ResourceModel\Importer::class);

$serializer = $objectManager->create(Json::class);

for ($i=0; $i<25; $i++) {
    $importerModel = $objectManager->create(Dotdigitalgroup\Email\Model\Importer::class);

    $importerModel->setImportType("Reviews");
    $importerModel->setWebsiteId(1);
    $importerModel->setImportStatus(1);
    $importerModel->setImportId('Dummy-id');
    $importerModel->setImportMode("Bulk");

    $importerResourceModel->save($importerModel);
}

for ($i=0; $i<75; $i++) {
    $importedData = $serializer->serialize([
        "id" => $i,
        "parent_id" => $i + 10,
        "name" => "Chaz Kangaroo_" . $i,
        "sku" => "chaz-kangaroo_sku" . $i,
        "price" => "25.0"
    ]);

    $importerModel = $objectManager->create(Dotdigitalgroup\Email\Model\Importer::class);

    $importerModel->setImportType("Catalog_Default");
    $importerModel->setWebsiteId(1);
    $importerModel->setImportStatus(1);
    $importerModel->setImportId('Dummy-id');
    $importerModel->setImportMode("Bulk");
    $importerModel->setImportData($importedData);

    $importerResourceModel->save($importerModel);
}
