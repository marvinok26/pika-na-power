<?php

namespace App\Traits;

use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

trait PageSectionFormTableTraits
{
    public static function selectPage()
    {
        $pageArray = [
            Select::make('page_section_id')
                ->relationship(
                    name: 'page_section',
                    /**
                 * Kigathi - TODO: Edit titleAttribute to be a representative of the page and the order
                 * /Users/chegekigathi/Projects/kplc/vendor/filament/forms/src/Components/Select.php
                 *
                 * Will need a filament update/patch contribution because
                 *
                 *     ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->name} {$record->order}")
                 * does not work as expected
                 */
                    titleAttribute: 'pages.name',
                    modifyQueryUsing: function ($query) {
                        return $query
                            ->join('pages', 'page_sections.page_id', '=', 'pages.id')
                            ->join('sections', 'page_sections.section_id', '=', 'sections.id')
                            ->where('sections.model_type', '=', static::getModel())
                            ->orderBy('page_sections.order', 'desc');
                    })
                ->label('Page Section')
                ->searchable()
                ->preload(),
        ];
        if (isset(request()->input()['page_sections_id'])) {
            $pageArray = [
                \Filament\Forms\Components\TextInput::make('page_section_id')
                    ->hidden()
                    ->default(request()->input()['page_section_id']),
            ];
        }
        return $pageArray;
    }

    public static function getPage()
    {
        return [TextColumn::make('page.name')
                ->searchable()];
    }
}
