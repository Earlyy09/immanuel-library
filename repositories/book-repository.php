<?php

function getBooks()
{
    return [
        [
            "id" => 1,
            "title" => "Laskar Pelangi",
            "category" => "Fiksi",
            "year" => 2005,
            "stock" => 12,
            "authors" => ["Andrea Hirata"],
        ],
        [
            "id" => 2,
            "title" => "Bumi",
            "category" => "Fiksi",
            "year" => 2014,
            "stock" => 8,
            "authors" => ["Tere Liye"],
        ],
        [
            "id" => 3,
            "title" => "Harry Potter dan Batu Bertuah",
            "category" => "Fiksi",
            "year" => 1997,
            "stock" => 5,
            "authors" => ["J.K. Rowling"],
        ],
        [
            "id" => 4,
            "title" => "Bumi Manusia",
            "category" => "Sejarah",
            "year" => 1980,
            "stock" => 6,
            "authors" => ["Pramoedya Ananta Toer"],
        ],
        [
            "id" => 5,
            "title" => "Antologi Rasa Nusantara",
            "category" => "Fiksi",
            "year" => 2021,
            "stock" => 4,
            "authors" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"],
        ],
    ];
}

function getBook($id = 5)
{
    // Simulasi pengambilan data spesifik berdasarkan ID
    $books = [
        1 => [
            "id" => 1,
            "title" => "Laskar Pelangi",
            "isbn" => "978-979-3062-79-2",
            "year" => 2005,
            "stock" => 12,
            "category_id" => 1,
            "description" => "Novel tentang kehidupan 10 anak di Belitung.",
            "author_ids" => [1]
        ],
        5 => [
            "id" => 5,
            "title" => "Antologi Rasa Nusantara",
            "isbn" => "978-602-1234-56-7",
            "year" => 2021,
            "stock" => 4,
            "category_id" => 1,
            "description" => "Kumpulan cerita dari berbagai penulis.",
            "author_ids" => [4, 5]
        ]
    ];

    return $books[$id] ?? $books[5];
}