<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * すべてのbookを取得
     *
     * @return object $result
     */
    public function getAll()
    {
        return "Called getAll";
    }

    /**
     * IDを指定して1件取得
     *
     * @param integer $id
     * @return Bool $result
     */
    public function getById(int $id)
    {
        return "Called getById";
    }

    /**
     * Bookを追加
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->memo = $request->memo;
        $book->save();

        return response()->json([
            'message' => 'created book'
        ], 201);
    }

    /**
     * Bookを更新
     *
     * @param Request $request
     * @param integer $id
     * @return void
     */
    public function updateById(Request $request, int $id)
    {
        return "Called updateById";
    }

    /**
     * Bookを削除
     *
     * @param integer $id
     * @return void
     */
    public function deleteById(int $id)
    {
        return "Called deleteById";
    }
}
