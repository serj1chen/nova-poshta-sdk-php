<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.2015
 * Time: 22:00
 */

include_once "../NovaPoshta/autoload.php";

use NovaPoshta\ApiModels\InternetDocument;
use NovaPoshta\Models\CounterpartyContact;

class InternetDocument_example
{
    static public function save()
    {
        $sender = new CounterpartyContact();
        $sender->setCity('8d5a980d-391c-11dd-90d9-001a92567626');
        $sender->setRef('f867c762-e66a-11e3-8c4a-0050568002cf');
        $sender->setAddress('1ec09d88-e1c2-11e3-8c4a-0050568002cf');
        $sender->setContact('e23f313c-e67a-11e3-8c4a-0050568002cf');
        $sender->setPhone('+380660000000');

        $recipient = new CounterpartyContact();
        $recipient->setCity('db5c88de-391c-11dd-90d9-001a92567626');
        $recipient->setRef('7da56a9c-f205-11e3-8c4a-0050568002cf');
        $recipient->setAddress('daec7561-b457-11e4-a77a-005056887b8d');
        $recipient->setContact('57065334-f211-11e3-8c4a-0050568002cf');
        $recipient->setPhone('+380660000001');

        $internetDocument = new InternetDocument();
        $internetDocument->setSender($sender);
        $internetDocument->setRecipient($recipient);
        $internetDocument->ServiceType  = 'WarehouseDoors';
        $internetDocument->PayerType  = 'Sender';
        $internetDocument->PaymentMethod  = 'Cash';
        $internetDocument->CargoType  = 'Cargo';
        $internetDocument->Weight  = '2';
        $internetDocument->SeatsAmount  = '2';
        $internetDocument->Cost  = '2';
        $internetDocument->Description  = ' fd  fsf2';
        $internetDocument->PreferredDeliveryDate  = '20.03.2015';
        $internetDocument->TimeInterval  = 'CityDeliveryTimeInterval2';

        return $internetDocument->save();
    }

    static public function update()
    {
        $internetDocument = new InternetDocument();
        $internetDocument->Ref = '3b4e56a3-b490-11e4-a77a-005056887b8d';
        $internetDocument->CitySender = '8d5a980d-391c-11dd-90d9-001a92567626';
        $internetDocument->Sender = 'f867c762-e66a-11e3-8c4a-0050568002cf';
        $internetDocument->SenderAddress = '1ec09d88-e1c2-11e3-8c4a-0050568002cf';
        $internetDocument->ContactSender = 'e23f313c-e67a-11e3-8c4a-0050568002cf';
        $internetDocument->SendersPhone  = '+380660000000';

        $internetDocument->CityRecipient  = 'db5c88de-391c-11dd-90d9-001a92567626';
        $internetDocument->Recipient  = '7da56a9c-f205-11e3-8c4a-0050568002cf';
        $internetDocument->RecipientAddress  = 'daec7561-b457-11e4-a77a-005056887b8d';
        $internetDocument->ContactRecipient  = '57065334-f211-11e3-8c4a-0050568002cf';
        $internetDocument->RecipientsPhone  = '+380660000001';

        $internetDocument->ServiceType  = 'WarehouseDoors';
        $internetDocument->PayerType  = 'Sender';
        $internetDocument->PaymentMethod  = 'Cash';
        $internetDocument->CargoType  = 'Cargo';
        $internetDocument->Weight  = '2';
        $internetDocument->SeatsAmount  = '2';
        $internetDocument->Cost  = '2';
        $internetDocument->Description  = ' fd  fsf2';

        return $internetDocument->update();
    }

    static public function delete()
    {
        $internetDocument = new InternetDocument();
        $internetDocument->Ref = '3b4e561d-b490-11e4-a77a-005056887b8d';

        return $internetDocument->delete();
    }

    static public function getDocumentDeliveryDate()
    {
        $internetDocument = new InternetDocument();
        $internetDocument->DateTime = '16.02.2015';
        $internetDocument->CitySender = '8d5a980d-391c-11dd-90d9-001a92567626';
        $internetDocument->CityRecipient = 'db5c88de-391c-11dd-90d9-001a92567626';
        $internetDocument->ServiceType = 'WarehouseDoors';

        return $internetDocument->getDocumentDeliveryDate();
    }

    static public function documentsTracking()
    {
        $internetDocument = new InternetDocument();
        $internetDocument->Documents = array('20400000310076', '20400000310077');

        return $internetDocument->documentsTracking();
    }

    static public function getDocumentPrice()
    {
        $internetDocument = new InternetDocument();
        $internetDocument->DateTime = '16.02.2015';
        $internetDocument->CitySender = '8d5a980d-391c-11dd-90d9-001a92567626';
        $internetDocument->CityRecipient = 'db5c88de-391c-11dd-90d9-001a92567626';
        $internetDocument->Weight = '2';
        $internetDocument->Cost = '2222';
        $internetDocument->ServiceType = 'WarehouseDoors';

        return $internetDocument->getDocumentPrice();
    }

    static public function printDocument()
    {
        $internetDocument = new InternetDocument();
        $internetDocument->DocumentRefs = array('3b4e5620-b490-11e4-a77a-005056887b8d');
        $internetDocument->Type = InternetDocument::PRINT_TYPE_PDF;
        $internetDocument->Type = InternetDocument::PRINT_TYPE_HTML;
        $internetDocument->Copies = InternetDocument::PRINT_COPIES_DOUBLE;

        return $internetDocument->printDocument();
    }

    static public function printMarkings()
    {
        $internetDocument = new InternetDocument();
        $internetDocument->DocumentRefs = array('3b4e5620-b490-11e4-a77a-005056887b8d','3b4e5620-b490-11e4-a77a-005056887b8d',);
        $internetDocument->Type = InternetDocument::PRINT_TYPE_PDF;
        $internetDocument->Type = InternetDocument::PRINT_TYPE_HTML;
        $internetDocument->Copies = InternetDocument::PRINT_COPIES_FOURFOLD;

        return $internetDocument->printMarkings();
    }

    static public function getDocument()
    {
        $internetDocument = new InternetDocument();
        $internetDocument->Ref = '3b4e56a3-b490-11e4-a77a-005056887b8d';

        return $internetDocument->getDocument();
    }

    static public function getDocumentList()
    {
        $internetDocument = new InternetDocument();
//        $internetDocument->IntDocNumber = '20400000310107';
        $internetDocument->DateTime = '15.02.2015';

        return $internetDocument->getDocumentList();
    }
}


$result = InternetDocument_example::save();

var_dump($result);