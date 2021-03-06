<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * BroadcastLikeCountResponse.
 *
 * @method mixed getLikeTs()
 * @method Model\User[] getLikers()
 * @method mixed getLikes()
 * @method mixed getMessage()
 * @method string getStatus()
 * @method Model\_Message[] get_Messages()
 * @method bool isLikeTs()
 * @method bool isLikers()
 * @method bool isLikes()
 * @method bool isMessage()
 * @method bool isStatus()
 * @method bool is_Messages()
 * @method $this setLikeTs(mixed $value)
 * @method $this setLikers(Model\User[] $value)
 * @method $this setLikes(mixed $value)
 * @method $this setMessage(mixed $value)
 * @method $this setStatus(string $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetLikeTs()
 * @method $this unsetLikers()
 * @method $this unsetLikes()
 * @method $this unsetMessage()
 * @method $this unsetStatus()
 * @method $this unset_Messages()
 */
class BroadcastLikeCountResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'like_ts' => '',
        'likes'   => '',
        'likers'  => 'Model\User[]',
    ];
}
