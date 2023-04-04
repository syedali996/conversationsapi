# Getting started

## Introduction
Send messages using unifonic’s Conversations API. Message your target audience over social channels (WhatsApp for Business, Messenger, SMS, etc..).

Unifonic conversations API Restful and HTTP **API's** uses The basic Authentication protocol. All request and response bodies are formatted in JSON.


## Get an account
To start using the API you need to send an email support@unifonic.com to create an account for you.

## Base URL
All URLs referenced in the documentation have the following base: **apis.unifonic.com**

## Security
To ensure privacy, we recommend you to use HTTPS for all unifonic API requests.


## Formats
  conversations API only supports JSON format. All requests must use the Content-type header set to application/json.

## Support
We’re here to help! Get in touch with support at <support@unifonic.com> and we’ll get back to you as soon as we can or you can contact us throw live chat on our [website] (www.unifonic.com).

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Conversations%20API-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the ConversationsAPI library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Conversations%20API-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Conversations%20API-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Conversations%20API-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Conversations%20API-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=Conversations%20API-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Conversations%20API-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Conversations%20API-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Conversations%20API-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Conversations%20API-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Conversations%20API-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Conversations%20API-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=Conversations%20API-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| publicId | PublicId from application's API keys tab. |
| secret | Secret from application's API keys tab. |



API client can be initialized as following.

```php
$publicId = '{{PublicId}}'; // PublicId from application's API keys tab.
$secret = '{{Secret}}'; // Secret from application's API keys tab.

$client = new ConversationsAPILib\ConversationsAPIClient($publicId, $secret);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [OutboundMessagesController](#outbound_messages_controller)
* [WhatsappOutboundTemplateMessageController](#whatsapp_outbound_template_message_controller)
* [WhatsappOutboundSessionMessageController](#whatsapp_outbound_session_message_controller)

## <a name="outbound_messages_controller"></a>![Class: ](https://apidocs.io/img/class.png ".OutboundMessagesController") OutboundMessagesController

### Get singleton instance

The singleton instance of the ``` OutboundMessagesController ``` class can be accessed from the API Client.

```php
$outboundMessages = $client->getOutboundMessages();
```

### <a name="send_message"></a>![Method: ](https://apidocs.io/img/method.png ".OutboundMessagesController.sendMessage") sendMessage

> This endpoint allows you to send a message across any of our conversations channels, supported messages types can be found under the Structures section.


```php
function sendMessage($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request with correct body for the message type you want to send. |



#### Example Usage

```php
$body = new GenericMessageStructure();

$result = $outboundMessages->sendMessage($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request sent |
| 403 | User is not authorized to access this resource with an explicit deny |
| 500 | Internal Server Error |



[Back to List of Controllers](#list_of_controllers)

## <a name="whatsapp_outbound_template_message_controller"></a>![Class: ](https://apidocs.io/img/class.png ".WhatsappOutboundTemplateMessageController") WhatsappOutboundTemplateMessageController

### Get singleton instance

The singleton instance of the ``` WhatsappOutboundTemplateMessageController ``` class can be accessed from the API Client.

```php
$whatsapp_OutboundTemplateMessage = $client->getWhatsappOutboundTemplateMessage();
```

### <a name="send_template_text_message"></a>![Method: ](https://apidocs.io/img/method.png ".WhatsappOutboundTemplateMessageController.sendTemplateTextMessage") sendTemplateTextMessage

> This API works only with WhatsApp channel, it allows you to check whether a phone number has an active WhatsApp account or not. This end API allows you to implement call center IVR to WhatsApp deflection.


```php
function sendTemplateTextMessage(
        $body,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request with correct body for the message type you want to send. |
| contentType |  ``` Required ```  ``` DefaultValue ```  | Content-Type |



#### Example Usage

```php
$body = new GenericMessageStructureWithTemplate();
$contentType = 'application/json';

$result = $whatsapp_OutboundTemplateMessage->sendTemplateTextMessage($body, $contentType);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request sent |
| 403 | User is not authorized to access this resource with an explicit deny |
| 500 | Internal Server Error |



[Back to List of Controllers](#list_of_controllers)

## <a name="whatsapp_outbound_session_message_controller"></a>![Class: ](https://apidocs.io/img/class.png ".WhatsappOutboundSessionMessageController") WhatsappOutboundSessionMessageController

### Get singleton instance

The singleton instance of the ``` WhatsappOutboundSessionMessageController ``` class can be accessed from the API Client.

```php
$whatsapp_OutboundSessionMessage = $client->getWhatsappOutboundSessionMessage();
```

### <a name="send_text_session_message"></a>![Method: ](https://apidocs.io/img/method.png ".WhatsappOutboundSessionMessageController.sendTextSessionMessage") sendTextSessionMessage

> This endpoint allows you to send a message across any of our conversations channels, supported messages types can be found under the Structures section.


```php
function sendTextSessionMessage($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request with correct body for the message type you want to send. |



#### Example Usage

```php
$body = new GenericMessageStructureWithText();

$result = $whatsapp_OutboundSessionMessage->sendTextSessionMessage($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request sent |
| 403 | User is not authorized to access this resource with an explicit deny |
| 500 | Internal Server Error |



### <a name="send_image_session_message"></a>![Method: ](https://apidocs.io/img/method.png ".WhatsappOutboundSessionMessageController.sendImageSessionMessage") sendImageSessionMessage

> This endpoint allows you to send a message across any of our conversations channels, supported messages types can be found under the Structures section.


```php
function sendImageSessionMessage($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request with correct body for the message type you want to send. |



#### Example Usage

```php
$body = new GenericMessageStructureWithImage();

$result = $whatsapp_OutboundSessionMessage->sendImageSessionMessage($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request sent |
| 403 | User is not authorized to access this resource with an explicit deny |
| 500 | Internal Server Error |



### <a name="send_video_session_message"></a>![Method: ](https://apidocs.io/img/method.png ".WhatsappOutboundSessionMessageController.sendVideoSessionMessage") sendVideoSessionMessage

> This endpoint allows you to send a message across any of our conversations channels, supported messages types can be found under the Structures section.


```php
function sendVideoSessionMessage($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request with correct body for the message type you want to send. |



#### Example Usage

```php
$body = new GenericMessageStructureWithVideo();

$result = $whatsapp_OutboundSessionMessage->sendVideoSessionMessage($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request sent |
| 403 | User is not authorized to access this resource with an explicit deny |
| 500 | Internal Server Error |



### <a name="send_audio_session_message"></a>![Method: ](https://apidocs.io/img/method.png ".WhatsappOutboundSessionMessageController.sendAudioSessionMessage") sendAudioSessionMessage

> This endpoint allows you to send a message across any of our conversations channels, supported messages types can be found under the Structures section.


```php
function sendAudioSessionMessage($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request with correct body for the message type you want to send. |



#### Example Usage

```php
$body = new GenericMessageStructureWithAudio();

$result = $whatsapp_OutboundSessionMessage->sendAudioSessionMessage($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request sent |
| 403 | User is not authorized to access this resource with an explicit deny |
| 500 | Internal Server Error |



### <a name="send_file_session_message"></a>![Method: ](https://apidocs.io/img/method.png ".WhatsappOutboundSessionMessageController.sendFileSessionMessage") sendFileSessionMessage

> This endpoint allows you to send a message across any of our conversations channels, supported messages types can be found under the Structures section.


```php
function sendFileSessionMessage($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request with correct body for the message type you want to send. |



#### Example Usage

```php
$body = new GenericMessageStructureWithFile();

$result = $whatsapp_OutboundSessionMessage->sendFileSessionMessage($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request sent |
| 403 | User is not authorized to access this resource with an explicit deny |
| 500 | Internal Server Error |



### <a name="send_contacts_session_message"></a>![Method: ](https://apidocs.io/img/method.png ".WhatsappOutboundSessionMessageController.sendContactsSessionMessage") sendContactsSessionMessage

> This endpoint allows you to send a message across any of our conversations channels, supported messages types can be found under the Structures section.


```php
function sendContactsSessionMessage($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request with correct body for the message type you want to send. |



#### Example Usage

```php
$body = new GenericMessageStructureWithContacts();

$result = $whatsapp_OutboundSessionMessage->sendContactsSessionMessage($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request sent |
| 403 | User is not authorized to access this resource with an explicit deny |
| 500 | Internal Server Error |



### <a name="send_location_session_message"></a>![Method: ](https://apidocs.io/img/method.png ".WhatsappOutboundSessionMessageController.sendLocationSessionMessage") sendLocationSessionMessage

> This endpoint allows you to send a message across any of our conversations channels, supported messages types can be found under the Structures section.


```php
function sendLocationSessionMessage($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request with correct body for the message type you want to send. |



#### Example Usage

```php
$body = new GenericMessageStructureWithLocation();

$result = $whatsapp_OutboundSessionMessage->sendLocationSessionMessage($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request sent |
| 403 | User is not authorized to access this resource with an explicit deny |
| 500 | Internal Server Error |



### <a name="send_list_message"></a>![Method: ](https://apidocs.io/img/method.png ".WhatsappOutboundSessionMessageController.sendListMessage") sendListMessage

> This endpoint allows you to send a message across any of our conversations channels, supported messages types can be found under the Structures section.


```php
function sendListMessage($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request with correct body for the message type you want to send. |



#### Example Usage

```php
$body = new GenericMessageStructureWithListMessage();

$result = $whatsapp_OutboundSessionMessage->sendListMessage($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request sent |
| 403 | User is not authorized to access this resource with an explicit deny |
| 500 | Internal Server Error |



### <a name="send_reply_button_message"></a>![Method: ](https://apidocs.io/img/method.png ".WhatsappOutboundSessionMessageController.sendReplyButtonMessage") sendReplyButtonMessage

> This endpoint allows you to send a message across any of our conversations channels, supported messages types can be found under the Structures section.


```php
function sendReplyButtonMessage($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request with correct body for the message type you want to send. |



#### Example Usage

```php
$body = new GenericMessageStructureWithReplyButton();

$result = $whatsapp_OutboundSessionMessage->sendReplyButtonMessage($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request sent |
| 403 | User is not authorized to access this resource with an explicit deny |
| 500 | Internal Server Error |



### <a name="send_product_message"></a>![Method: ](https://apidocs.io/img/method.png ".WhatsappOutboundSessionMessageController.sendProductMessage") sendProductMessage

> This endpoint allows you to send a message across any of our conversations channels, supported messages types can be found under the Structures section.


```php
function sendProductMessage($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request with correct body for the message type you want to send. |



#### Example Usage

```php
$body = new GenericMessageStructureWithProduct();

$result = $whatsapp_OutboundSessionMessage->sendProductMessage($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request sent |
| 403 | User is not authorized to access this resource with an explicit deny |
| 500 | Internal Server Error |



### <a name="send_product_list_message"></a>![Method: ](https://apidocs.io/img/method.png ".WhatsappOutboundSessionMessageController.sendProductListMessage") sendProductListMessage

> This endpoint allows you to send a message across any of our conversations channels, supported messages types can be found under the Structures section.


```php
function sendProductListMessage($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request with correct body for the message type you want to send. |



#### Example Usage

```php
$body = new GenericMessageStructureWithProductList();

$result = $whatsapp_OutboundSessionMessage->sendProductListMessage($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request sent |
| 403 | User is not authorized to access this resource with an explicit deny |
| 500 | Internal Server Error |



[Back to List of Controllers](#list_of_controllers)



