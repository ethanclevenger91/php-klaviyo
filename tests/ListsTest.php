<?php


use Klaviyo\Lists as Klaviyo;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Klaviyo\Model\ProfileModel as ProfileModel;

class ListsTest extends TestCase
{
    protected $test_KLAVIYO;
    protected $test_client;

    public function setUp(): void {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->test_KLAVIYO = new Klaviyo(
            'ABCDEF',
            'pk_TESTPRIVATEKEY'
        );

        $this->test_client = new Client(
            ['base_uri' => Klaviyo::HOST]
        );

    }

    public function testCreateList()
    {
        $this->test_KLAVIYO->createList( 'excited' );
    }

    public function testDeleteList()
    {
        print_r( $this->test_KLAVIYO->deleteList('X6bven'));
    }

    public function testGetLists()
    {
        print_r( $this->test_KLAVIYO->getLists() );
    }

    public function testGetAllExclusionsOnList()
    {
        print_r( $this->test_KLAVIYO->getAllExclusionsOnList( 'Rm8vij' ));
    }

    public function testUnsubscribeMembersFromList()
    {
        print_r( $this->test_KLAVIYO->unsubscribeMembersFromList('Rm8vij', array( 'sidd.nighthawk+subscribe@gmail.com' )));
    }

    public function testAddMembersToList()
    {
        $profiles = array(
            new ProfileModel( array(
                '$email' => 'sidd.nighthawk+members@gmail.com')
            )
        );

        print_r( $this->test_KLAVIYO->addMembersToList( 'Rm8vij', $profiles ));
    }

    public function testCheckListSubscriptions()
    {
        print_r( $this->test_KLAVIYO->checkListSubscriptions('Rm8vij', ['sidd.nighthawk+subscribe@gmail.com', 'sidd.nighthawk@gmail.com']));
    }

    public function testRemoveMembersFromList()
    {
        print_r( $this->test_KLAVIYO->removeMembersFromList('Rm8vij', array( 'sidd.nighthawk+members@gmail.com' )));
    }

    public function testCheckListMembership()
    {
        print_r( $this->test_KLAVIYO->checkListMembership('Rm8vij', ['sidd.nighthawk+members@gmail.com', 'sidd.nighthawk@gmail.com']));
    }

    public function testGetGroupMemberIdentifiers()
    {
        print_r( $this->test_KLAVIYO->getGroupMemberIdentifiers('Rm8vij' ));
    }

    public function testGetListDetails()
    {
        print_r( $this->test_KLAVIYO->getListDetails( 'Rm8vij' ));
    }

    public function testUpdateListDetails()
    {
        print_r( $this->test_KLAVIYO->updateListDetails('Rm8vij', 'new_list_name' ));
    }

    public function testSubscribeMembersToList()
    {
        $profiles = array(
            new ProfileModel( array(
                '$email' => 'sidd.nighthawk+subscribe@gmail.com'
            ) )
        );

        print_r( $this->test_KLAVIYO->subscribeMembersToList( 'Rm8vij', $profiles ));
    }
}
