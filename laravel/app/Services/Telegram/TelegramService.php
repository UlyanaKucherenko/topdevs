<?php

namespace App\Services\Telegram;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;


class TelegramService
{
    private $recipient;
    private $baseUrl;

    public function __construct()
    {
        $this->recipient = config('telegram.chat_id');
        $this->baseUrl = 'https://api.telegram.org/bot' . config('telegram.bot_token') . '/';

    }

    /**
     * @param array $data
     */
    public function sendMessageFromRequest(array $data): void
    {
        $text = $this->generateMessage($data);
        $this->sendMessage($text);
        if(! empty($data['attachment'])) {
            $this->sendDocuments($data['attachment']);
        }
    }

    private function sendMessage(string $message): void
    {
        Http::post($this->baseUrl . 'sendMessage', [
            'chat_id' => $this->recipient,
            'text' => $message,
            'parse_mode' => 'HTML',
        ]);
    }

    private function generateMessage(array $data): string
    {
        $text = "<b>FROM: </b>" . $data['name'] . PHP_EOL
            . "<b>EMAIL: </b>" . $data['email'] . PHP_EOL;

        if (!empty($data['phone'])) {
            $text .= "<b>Phone: </b>" . $data['phone'] . PHP_EOL;
        }
        if (!empty($data['phone'])) {
            $text .= "<b>Skype: </b>" . $data['skype'] . PHP_EOL;
        }
        if (!empty($data['get_NDA'])) {
            $text .= "<b>GET NDA: </b>YES" . PHP_EOL;
        }
        $text .= "<b>MESSAGE: </b>" . $data['message'] . PHP_EOL;

        return $text;
    }

    private function sendDocuments(array $attachments)
    {
        if (!empty($attachments) && is_array($attachments)) {
            /** @var UploadedFile $attachment */
            foreach ($attachments as $attachment) {
                Http::attach(
                    'document',
                    file_get_contents($attachment->getRealPath()),
                    $attachment->getClientOriginalName()
                )->post($this->baseUrl . 'sendDocument', ['chat_id' => $this->recipient]);
            }
        }
    }

}
