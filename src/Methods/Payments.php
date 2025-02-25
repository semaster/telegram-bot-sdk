<?php

namespace Telegram\Bot\Methods;

use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\Updates\Message;
use Telegram\Bot\Traits\Http;

/**
 * Trait Payments.
 *
 * @mixin Http
 */
trait Payments
{
    /**
     * Send invoices.
     *
     * <code>
     * $params = [
     *      'chat_id'                        => '',  // int            - Required. Unique identifier for the target chat or username of the target channel (in the format "@channelusername")
     *      'title'                          => '',  // string         - Required. Product name, 1-32 characters
     *      'description'                    => '',  // string         - Required. Product description, 1-255 characters
     *      'payload'                        => '',  // string         - Required. Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
     *      'providerToken'                  => '',  // string         - Required. Payments provider token, obtained via Botfather
     *      'startParameter'                 => '',  // string         - Required. Unique deep-linking parameter that can be used to generate this invoice when used as a start parameter
     *      'currency'                       => '',  // string         - Required. Three-letter ISO 4217 currency code
     *      'prices'                         => '',  // LabeledPrice[] - Required. Price breakdown, a list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
     *      'provider_data'                  => '',  // string         - (Optional). JSON-encoded data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     *      'photoUrl'                       => '',  // string         - (Optional). URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
     *      'photoSize'                      => '',  // int            - (Optional). Photo size
     *      'photoWidth'                     => '',  // int            - (Optional). Photo width
     *      'photoHeight'                    => '',  // int            - (Optional). Photo height
     *      'needName'                       => '',  // bool           - (Optional). Pass True, if you require the user's full name to complete the order
     *      'needPhoneNumber'                => '',  // bool           - (Optional). Pass True, if you require the user's phone number to complete the order
     *      'needEmail'                      => '',  // bool           - (Optional). Pass True, if you require the user's email to complete the order
     *      'needShippingAddress'            => '',  // bool           - (Optional). Pass True, if you require the user's shipping address to complete the order
     *      'send_phone_number_to_provider'  => '',  // bool           - (Optional). Pass True, if user's phone number should be sent to provider
     *      'send_email_to_provider'         => '',  // bool           - (Optional). Pass True, if user's email address should be sent to provider
     *      'isFlexible'                     => '',  // bool           - (Optional). Pass True, if the final price depends on the shipping method
     *      'disableNotification'            => '',  // bool           - (Optional). Sends the message silently. Users will receive a notification with no sound.
     *      'reply_to_message_id'            => '',  // int            - (Optional). If the message is a reply, ID of the original message
     *      'reply_markup'                   => '',  // string         - (Optional). A JSON-serialized object for an inline keyboard. If empty, one 'Pay total price' button will be shown. If not empty, the first button must be a Pay button.
     * ]
     * </code>
     *
     * @link https://core.telegram.org/bots/api#sendinvoice
     *
     * @param array $params
     *
     * @throws TelegramSDKException
     *
     * @return Message
     */
    public function sendInvoice(array $params): Message
    {
        $response = $this->post('sendInvoice', $params);

        return new Message($response->getDecodedBody());
    }

    /**
     * Reply to shipping queries.
     *
     * <code>
     * $params = [
     *      'shippingQueryId'  => '',  // string           - Required. Unique identifier for the query to be answered
     *      'ok'               => '',  // bool             - Required. Specify True if delivery to the specified address is possible and False if there are any problems (for example, if delivery to the specified address is not possible)
     *      'shippingOptions'  => '',  // ShippingOption[] - (Optional|Required). Required if ok is True. A JSON-serialized array of available shipping options.
     *      'errorMessage'     => '',  // string           - (Optional|Required). Required if ok is False. Error message in human readable form that explains why it is impossible to complete the order (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will display this message to the user.
     * ]
     * </code>
     *
     * @link https://core.telegram.org/bots/api#answershippingquery
     *
     * @param array $params
     *
     * @throws TelegramSDKException
     *
     * @return bool
     */
    public function answerShippingQuery(array $params): bool
    {
        return $this->post('answerShippingQuery', $params)->getResult();
    }

    /**
     * Reply to pre-checkout queries.
     *
     * <code>
     * $params = [
     *      'preCheckoutQueryId'  => '',  // string - Required. Unique identifier for the query to be answered
     *      'ok'                  => '',  // bool   - Required. Specify True if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use False if there are any problems.
     *      'errorMessage'        => '',  // string - (Optional|Required). Required if ok is False. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.
     * ]
     * </code>
     *
     * @link https://core.telegram.org/bots/api#answerprecheckoutquery
     *
     * @param array $params
     *
     * @throws TelegramSDKException
     *
     * @return bool
     */
    public function answerPreCheckoutQuery(array $params): bool
    {
        return $this->post('answerPreCheckoutQuery', $params)->getResult();
    }
}
