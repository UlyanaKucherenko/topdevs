<?php

namespace App\Services\Constants;

class PostStatus {
    const POST_FUTURE = 'future';
    const POST_PUBLISH = 'publish';
    const POST_DRAFT = 'draft';
    const POST_AUTO_DRAFT = 'auto-draft';
    const POST_TRASH = 'trash';

    /**
     * @return array
     */
    public static function getStatuses(): array
    {
        return [
            self::POST_FUTURE, self::POST_PUBLISH, self::POST_DRAFT, self::POST_AUTO_DRAFT, self::POST_TRASH
        ];
    }

    /**
     * @return string
     */
    public static function getDefaultStatus(): string
    {
        return self::POST_PUBLISH;
    }
}
