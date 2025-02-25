<?php

namespace Telegram\Bot\Objects;

/**
 * Class ChatMember.
 *
 * @link https://core.telegram.org/bots/api#chatmember
 *
 * @property User   $user                       Information about the user.
 * @property string $status                     The member's status in the chat. Can be “creator”, “administrator”, “member”, “left” or “kicked”
 * @property string $custom_title               (Optional). Owner and administrators only. Custom title for this user
 * @property int    $until_date                 (Optional). Restictred and kicked only. Date when restrictions will be lifted for this user, unix time
 * @property bool   $can_be_edited              (Optional). Administrators only. True, if the bot is allowed to edit administrator privileges of that user
 * @property bool   $can_post_messages          (Optional). Administrators only. True, if the administrator can post in the channel, channels only
 * @property bool   $can_edit_messages          (Optional). Administrators only. True, if the administrator can edit messages of other users, channels only
 * @property bool   $can_delete_messages        (Optional). Administrators only. True, if the administrator can delete messages of other users
 * @property bool   $can_promote_members        (Optional). Administrators only. True, if the administrator can add new administrators with a subset of his own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
 * @property bool   $can_change_info            (Optional). Administrators and restricted only. True, if the administrator can change the chat title, photo and other settings
 * @property bool   $can_invite_users           (Optional). Administrators and restricted only. True, if the administrator can invite new users to the chat
 * @property bool   $can_pin_messages           (Optional). Administrators and restricted only. True, if the administrator can pin messages, supergroups only
 * @property bool   $is_member                  (Optional). Restricted only. True, if the user is a member of the chat at the moment of the request
 * @property bool   $can_send_messages          (Optional). Restricted only. True, if the user can send text messages, contacts, locations and venues
 * @property bool   $can_send_media_messages    (Optional). Restricted only. True, if the user can send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
 * @property bool   $can_send_polls             (Optional). Restricted only. True, if the user is allowed to send polls
 * @property bool   $can_send_other_messages    (Optional). Restricted only. True, if the user can send animations, games, stickers and use inline bots, implies can_send_media_messages
 * @property bool   $can_add_web_page_previews  (Optional). Restricted only. True, if user may add web page previews to his messages, implies can_send_media_messages
 */
class ChatMember extends AbstractResponseObject
{
    public function relations(): array
    {
        return [
            'user' => User::class,
        ];
    }
}
