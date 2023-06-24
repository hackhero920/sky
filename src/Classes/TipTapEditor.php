<?php

namespace LaraZeus\Sky\Classes;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\Textarea;
use FilamentTiptapEditor\Exceptions\InvalidOutputFormatException;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor as TinyEditorAlias;

class TipTapEditor implements ContentEditor
{
    /**
     * @throws InvalidOutputFormatException
     */
    public static function component(): Component
    {
        if (class_exists(TinyEditorAlias::class, false)) {
            return \FilamentTiptapEditor\TiptapEditor::make('content')
                ->profile('default')
                ->output(\FilamentTiptapEditor\TiptapEditor::OUTPUT_HTML)
                ->required();
        }

        return Textarea::make('content')->required();
    }

    public static function render(string $content): string
    {
        if (class_exists(TinyEditorAlias::class, false)) {
            return tiptap_converter()->asHTML($content);
            // return tiptap_converter()->asJSON($content);
            // return tiptap_converter()->asText($content);
        }

        return $content;
    }
}