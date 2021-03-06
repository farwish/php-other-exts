# test demo

StackTest.php  
> @depends testEmpty  
> assertEmpty()   
> assertNotEmpty()  
> assertEquals()  

MultipleDependenciesTest.php  
> @depends testProducerFirst  
> @depends testProducerSecond  

DataProvider.php  
> @dataProvider provider  

DependencyAndDataProviderComboTest.php  
> @dataProvider provider  
> @depends testProducerFirst  
> @depends testProducerSecond   
> assertTrue()  

ExceptionTest.php  
> @expectedException  
> expectException(Exception::class)  

ExpectedErrorTest.php   

ErrorSuppressionTest.php  

OutputTest.php  
> expectedOutputString()

UselessTest.php  

IncompleteTest.php  
> markTestIncomplete()  

SkippedTest.php  
> markTestSkipped()  
> @requires  

StackFixtureTest.php  
> setUp()  

TemplateMethodsTest.php  
> setUpBeforeClass()  
> setUp()  
> assertPreConditions()  
> ...  
> assertPostConditions()  
> tearDown()  
> setUp()  
> assertPreConditions()  
> ...  
> tearDown()  
> onNotSuccessfulTest()  

DatabaseFixtureTest.php  
> setUpBeforeClass()  
> tearDownAfterClass()  

MyDatabaseTestCase.php  

CompositeDataSetTest.php  

MySqlDataSetTest.php  
> getConnection()  
> getDataSet()  
> getRowCount()  

StubReturnValueTest.php  
> createMock()  
> method()  
> will()  
> returnValue()  

StubReturnArgumentTest.php  
> createMock()  
> method()  
> will()  
> returnArgument()  

StubReturnSelfTest.php  
> createMock()  
> method()  
> will()  
> returnSelf()  
> assertSame()  

StubReturnCallbackTest.php  
> createMock()  
> method()  
> will()  
> returnCallback()  

StubOnConsecutiveCallsTest.php  
> createMock()  
> method()  
> will()  
> onConsecutiveCalls()  

StubThrowExceptionTest.php  



