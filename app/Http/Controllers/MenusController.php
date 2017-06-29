<?php

namespace App\Http\Controllers;

use App\Menu;
use Symfony\Component\HttpFoundation\Response;

class MenusController extends Controller
{
    public function getCategories ($id, $categoryId = null)
    {
        $resp = $this->defaultGetRelationResultOfId(Menu::class, $id, Category::class, 'categories', $categoryId);

        return response()->json($resp->getData(), $resp->getCode());
    }


    public function syncMenuToCategories ($id)
    {
        // TODO
        return response()->json(null, Response::HTTP_NOT_IMPLEMENTED);
    }


    public function getOrders ($id, $orderId = null)
    {
        $resp = $this->defaultGetRelationResultOfId(Menu::class, $id, Order::class, 'orders', $orderId);

        return response()->json($resp->getData(), $resp->getCode());
    }
}