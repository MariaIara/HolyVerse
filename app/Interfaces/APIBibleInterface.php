<?php

namespace App\Interfaces;

interface APIBibleInterface
{
    public function getDailyVerse();

    public function getChapters();

    public function getChapter();

    public function getVerse();

    public function getBooks(string $testament);
}
