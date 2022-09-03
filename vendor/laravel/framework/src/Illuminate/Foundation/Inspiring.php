<?php

namespace Illuminate\Foundation;

use Illuminate\Support\Collection;

/*
                        (
                          )     (
                   ___...(-------)-....___
               .-""       )    (          ""-.
         .-'``'|-._             )         _.-|
        /  .--.|   `""---...........---""`   |
       /  /    |                             |
       |  |    |                             |
        \  \   |                             |
         `\ `\ |                             |
           `\ `|                             |
           _/ /\                             /
          (__/  \                           /
       _..---""` \                         /`""---.._
    .-'           \                       /          '-.
   :               `-.__             __.-'              :
   :                  ) ""---...---"" (                 :
    '._               `"--...___...--"`              _.'
  jgs \""--..__                              __..--""/
       '._     """----.....______.....----"""     _.'
          `""--..,,_____            _____,,..--""`
                        `"""----"""`


 */

class Inspiring
{
    /**
     * Get an inspiring quote.
     *
     * Taylor & Dayle made this commit from Jungfraujoch. (11,333 ft.)
     *
     * May McGinnis always control the board. #LaraconUS2015
     *
     * RIP Charlie - Feb 6, 2018
     *
     * @return string
     */
    public static function quote()
    {
        return static::quotes()
            ->map(fn ($quote) => static::formatForConsole($quote))
            ->random();
    }

    /**
     * Get the collection of inspiring quotes.
     *
     * @return \Illuminate\Support\Collection
     */
    public static function quotes()
    {
        return Collection::make([
          'Kopi mengajarkan kita bahwa kehidupan tidak selamanya manis, tapi ada pahitnya juga.',
          'Jika kopimu terlalau manis cobalah meminumnya sembari mengenang masa lalu, barang kali bisa membantu.',
          'Persamaan hidupku dengan kopi adalah kopi takkan manis tanpa adanya gula, begitu juga dengan hidupku. Hidupku akan pahit tanpa adanya dirimu.',
          'Hidup kadang memerlukan hal-hal ringan dan bahkan remeh-temeh seperti halnya kopi instan.',
          'Masalah itu seperti gula yang di aduk dalam secangkir kopi semakin lama mengaduk dan terus larut akan menjadi manis pada setiap teguknya.',
          'Terinspirasi dari secangkir kopi, bahwa dia tak pernah dusta atas nama rasa. Kopi punya cerita, hitam tak selalu kotor, pahit tak harus sedih.',
          'Lelaki itu seperti segelas kopi. Mereka kuat, hangat, dan akan senantiasa menjagamu baik siang maupun malam.',
          'Haruskah saya bunuh diri atau minum secangkir kopi?',
          'Jika ini adalah kopi, bawalah saya teh. Tetapi jika ini adalah teh, bawakan saya kopi',
          'Kurang atau lebih, setiap rezeki perlu dirayakan dengan secangkir kopi.',
          'Ternyata, bangun lebih pagi adalah pembunuh gerutu. Karena kita punya waktu untuk secangkir kopi, setampuk lamunan, dan secarik rindu.',
          'Jadilah seperti kopi pagi ini. Walau sendiri, namun memberi ketenangan dan inspirasi tanpa henti.',
          'Jangan terburu-buru dalam menjalani sesuatu nikmati saja apa yang ada, seperti halnya minum kopi.',
          'Kopi ini pahit, tapi kalau minum sambil melihat dirimu, kopi ini terasa manis.',
          'Kopi tanpa gula adalah kopi yang jujur. Dia tak perlu bermanis-manis di mulut. Tanpa ragu menunjukkan jati diri pada sang peminumnya.',
          'Engkau kopi puncak malamku, kekasih, pahit dan kelam tanpa kusedu.',
          'Saat bangun tanpa ada secangkir kopi itu bikin diri ini merasa ada salah satu rantai makanan yang hilang.',
          'Hidup ini seperti secangkir kopi di mana pahit dan manis bertemu dalam kehangatan',
          'Hidup itu ibarat minum kopi, kadang rasanya pahit, tapi itu yang membuat mata terbuka.',
          'Hidup itu seperti secangkir kopi kamu perlu menambah gula, untuk membuatnya menjadi manis.',
          'Kau tak suka kopi dan akrab dengan teh. Sedangkan aku, terlalu identik dengan kopi dengan segala kepahitannya.',
          'Kesempurnaan rasa kopi berasal dari rasa pahitnya. Oleh karena itu, kenangan pahit akan membentuk kita yang lebih baik di masa depan.',
          'Membingkai pagi mewarnakan mentari, jangan lupa menyoreka hari dengan segelas kopi berbagi, agar hati menjadi pelangi di malam nanti.',
          'Hujan semakin menjadi akan menambah kesan untuk kopi sebagai pereda hati disaat dinginnya hujan.',
          'Ketika kata-kata tak lagi banyak berbicara, secangkir kopi bisa jadi perantara dan mencairkan suasana.',
          'Terinspirasi dari secangkir kopi, bahwa dia tak pernah dusta atas nama rasa. Kopi punya cerita, hitam tak selalu kotor, pahit tak harus sedih.',
          'Belajar ikhlas pada gula di secangkir kopi ia rela tak disebut meski menghilangkan pahit itu sendiri.',
          'Kopi yang baik akan selalu menemukan penikmatnya.',
          'Jangan dulu, aku tak semanis yang kau duga tapi tak sepahit yang mereka katakan. Bila tak suka pergi lah kopiku sederhana. Kopimu mulai dingin nikmatilah.',
          'Masalah itu seperti gula yang diaduk dalam secangkir kopi semakin lama mengaduk dan terus larut akan menjadi manis pada setiap teguknya.',
          'Kopi dan rokok adalah pasangan yang serasi, jangan biarkan pisang goreng ada di antara mereka.'
        ]);
    }

    /**
     * Formats the given quote for a pretty console output.
     *
     * @param  string  $quote
     * @return string
     */
    protected static function formatForConsole($quote)
    {

        return sprintf(
            "\n  <options=bold>“ %s ”</>",
            $quote
        );
    }
}
