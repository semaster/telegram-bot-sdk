<?php

namespace Telegram\Bot\Methods;

use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\Updates\Message as MessageObject;
use Telegram\Bot\Traits\Http;

/**
 * Class Location.
 *
 * @mixin Http
 */
trait Location
{
    /**
     * Send point on the map.
     *
     * <code>
     * $params = [
     *       'chat_id'               => '',  // int|string - Required. Unique identifier for the target chat or username of the target channel (in the format "@channelusername")
     *       'latitude'              => '',  // float      - Required. Latitude of location
     *       'longitude'             => '',  // float      - Required. Longitude of location
     *       'live_period'           => '',  // int        - (Optional). Period in seconds for which the location will be updated (see Live Locations, should be between 60 and 86400.
     *       'disable_notification'  => '',  // bool       - (Optional). Sends the message silently. iOS users will not receive a notification, Android users will receive a notification with no sound.
     *       'reply_to_message_id'   => '',  // int        - (Optional). If the message is a reply, ID of the original message
     *       'reply_markup'          => '',  // string     - (Optional). Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * ]
     * </code>
     *
     * @link https://core.telegram.org/bots/api#sendlocation
     *
     * @param array $params
     *
     * @throws TelegramSDKException
     *
     * @return MessageObject
     */
    public function sendLocation(array $params): MessageObject
    {
        $response = $this->post('sendLocation', $params);

        return new MessageObject($response->getDecodedBody());
    }

    /**
     * Edit live location messages sent by the bot or via the bot.
     *
     * <code>
     * $params = [
     *       'chat_id'            => '',  // int|string - (Optional|Required). Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format "@channelusername")
     *       'message_id'         => '',  // int        - (Optional|Required). Required if inline_message_id is not specified. Identifier of the sent message
     *       'inline_message_id'  => '',  // string     - (Optional|Required). Required if chat_id and message_id are not specified. Identifier of the inline message
     *       'latitude'           => '',  // float      - Required. Latitude of location
     *       'longitude'          => '',  // float      - Required. Longitude of location
     *       'reply_markup'       => '',  // string     - (Optional). A JSON-serialized object for a new inline keyboard.
     * ]
     * </code>
     *
     * @link https://core.telegram.org/bots/api#editmessagelivelocation
     *
     * @param array $params
     *
     * @throws TelegramSDKException
     *
     * @return MessageObject|bool
     */
    public function editMessageLiveLocation(array $params)
    {
        $response = $this->post('editMessageLiveLocation', $params);

        return new MessageObject($response->getDecodedBody());
    }

    /**
     * Stop updating a live location message sent by the bot or via the bot.
     *
     * <code>
     * $params = [
     *       'chat_id'            => '',  // int|string - (Optional|Required). Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format "@channelusername")
     *       'message_id'         => '',  // int        - (Optional|Required). Required if inline_message_id is not specified. Identifier of the sent message
     *       'inline_message_id'  => '',  // string     - (Optional|Required). Required if chat_id and message_id are not specified. Identifier of the inline message
     *       'reply_markup'       => '',  // string     - (Optional). A JSON-serialized object for a new inline keyboard.
     * ]
     * </code>
     *
     * @link https://core.telegram.org/bots/api#stopmessagelivelocation
     *
     * @param array $params
     *
     * @throws TelegramSDKException
     *
     * @return MessageObject|bool
     */
    public function stopMessageLiveLocation(array $params)
    {
        $response = $this->post('stopMessageLiveLocation', $params);

        return new MessageObject($response->getDecodedBody());
    }
}
