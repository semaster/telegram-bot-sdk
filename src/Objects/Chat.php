<?php

namespace Telegram\Bot\Objects;

use Telegram\Bot\Objects\InputMedia\InputMedia;

/**
 * Class Chat.
 *
 * @link https://core.telegram.org/bots/api#chat
 *
 * @property int             $id                   Unique identifier for this chat, not exceeding 1e13 by absolute value.
 * @property string          $type                 Type of chat, can be either 'private', 'group', 'supergroup' or 'channel'.
 * @property string          $title                (Optional). Title, for channels and group chats.
 * @property string          $username             (Optional). Username, for private chats and channels if available
 * @property string          $first_name           (Optional). First name of the other party in a private chat
 * @property string          $last_name            (Optional). Last name of the other party in a private chat
 * @property InputMedia      $photo                (Optional). Chat photo. Returned only in getChat.
 * @property string          $description          (Optional). Description, for groups, supergroups and channel chats. Returned only in getChat.
 * @property string          $invite_link          (Optional). Chat invite link, for groups, supergroups and channel chats. Each administrator in a chat generates their own invite links, so the bot must first generate the link using exportChatInviteLink. Returned only in getChat.
 * @property Message         $pinned_message       (Optional). Pinned message, for groups, supergroups and channels. Returned only in getChat.
 * @property ChatPermissions $permissions          (Optional). Pinned message, for groups, supergroups and channels. Returned only in getChat.
 * @property int             $slow_mode_delay      (Optional). For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user. Returned only in getChat.
 * @property string          $sticker_set_name     (Optional). For supergroups, name of group sticker set. Returned only in getChat.
 * @property bool            $can_set_sticker_set  (Optional). True, if the bot can change the group sticker set. Returned only in getChat.
 */
class Chat extends AbstractResponseObject
{
    public function relations(): array
    {
        return [
            'photo'          => InputMedia::class,
            'pinned_message' => Message::class,
            'permissions'    => ChatPermissions::class,
        ];
    }
}
