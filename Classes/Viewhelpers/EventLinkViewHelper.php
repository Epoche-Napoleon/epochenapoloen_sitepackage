<?php

class EventLinkViewHelper extends LinkViewHelper
{
    /**
     * Render link to news item or internal/external pages.
     * Adds the hrDate settings to create links with a date.
     *
     * @return string link
     */
    public function render(): string
    {
        /** @var News $newsItem */
        $newsItem = $this->arguments['newsItem'];
        $settings = $this->arguments['settings'] ?? [];
        $uriOnly = $this->arguments['uriOnly'];
        $configuration = $this->arguments['configuration'];
        $content = $this->arguments['content'];

        ArrayUtility::mergeRecursiveWithOverrule($settings, [
            'link' => [
                'hrDate' => [
                    '_typoScriptNodeValue' => 1,
                    'day' => '',
                    'month' => 'm',
                    'year' => 'Y'
                ]
            ]
        ]);
    }
}
