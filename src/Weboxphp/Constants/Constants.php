<?PHP

const WBX_API_USER = "Authorization: ";
const WBX_SDK_VERSION = "1.0";
const WBX_SDK_USER_AGENT = "webox-sdk-php";
const WBX_RECIPIENT_COUNT_LIMIT = 1000;
const WBX_CAMPAIGN_ID_LIMIT = 3;
const WBX_TAG_LIMIT = 3;
const WBX_DEFAULT_TIME_ZONE = "UTC";

//Common Exception Messages
const WBX_EXCEPTION_INVALID_CREDENTIALS = "Your credentials are incorrect.";
const WBX_EXCEPTION_GENERIC_HTTP_ERROR = "An HTTP Error has occurred! Check your network connection and try again.";
const WBX_EXCEPTION_MISSING_REQUIRED_PARAMETERS = "The parameters passed to the API were invalid. Check your inputs!";
const WBX_EXCEPTION_MISSING_REQUIRED_MIME_PARAMETERS = "The parameters passed to the API were invalid. Check your inputs!";
const WBX_EXCEPTION_MISSING_ENDPOINT = "The endpoint you've tried to access does not exist. Check your URL.";
const WBX_TOO_MANY_RECIPIENTS = "You've exceeded the maximum recipient count (1,000) on the to field with autosend disabled.";
const WBX_INVALID_PARAMETER_NON_ARRAY = "The parameter you've passed in position 2 must be an array.";
const WBX_INVALID_PARAMETER_ATTACHMENT = "Attachments must be passed with an \"@\" preceding the file path. Web resources not supported.";
const WBX_INVALID_PARAMETER_INLINE = "Inline images must be passed with an \"@\" preceding the file path. Web resources not supported.";
const WBX_TOO_MANY_PARAMETERS_CAMPAIGNS = "You've exceeded the maximum (3) campaigns for a single message.";
const WBX_TOO_MANY_PARAMETERS_TAGS = "You've exceeded the maximum (3) tags for a single message.";
const WBX_TOO_MANY_PARAMETERS_RECIPIENT = "You've exceeded the maximum recipient count (1,000) on the to field with autosend disabled.";
const WBX_NO_CONTENT = "The request was successful but there is no representation to return (i.e. the response is empty).";
const WBX_FORBIDDEN_RESOURCE = "The authenticated user is not allowed to access the specified API endpoint.";
const WBX_INTERNAL_SERVER_ERROR = "Internal server error. This could be caused by internal program errors.";
const WBX_METHOD_NOT_ALLOWED = "Method not allowed. Please check the Allow header for allowed HTTP methods.";

?>
