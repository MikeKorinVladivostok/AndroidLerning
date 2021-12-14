<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{

    public function firstDeliveryCompany(Request $request){
        try {
            if(!isset($request->id)) {
                throw new Exception('Отсутствует идентификатор товара');
            }
        } catch (Exception $e) {
            echo 'Ошибка: ',  $e->getMessage(), "\n";
        }
            $block = $request->SomeTabeleWeNeed::where('id',$request->id)->get();

            $SKU = $block->SKU;
            $address = $block->address;

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://firstDeliveryCompany.ru/?SKU='$SKU'.&address='$address'",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            $data = json_decode($response);

            try {
                if(isset($data['error']) ) {
                    throw new Exception('Ошибка оформления заказа');
                }
            } catch (Exception $e) {
                echo 'Внимание: ',  $e->getMessage(), "\n";
            }

        return view('SeeDeliveryCost', [
            'price' => $data['price'],
            'order_time' => $data['time'],
        ]);

    }

    public function secondDeliveryCompany(Request $request) {
        try {
            if(!isset($request->id)) {
                throw new Exception('Отсутствует идентификатор товара');
            }
        } catch (Exception $e) {
            echo 'Ошибка: ',  $e->getMessage(), "\n";
        }
        $block = $request->SomeTabeleWeNeed::where('id',$request->id)->get();

        $price = $block->price;
        $address = $block->address;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://secondDeliveryCompany.ru/?price='$price'.&address='$address'",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $data = json_decode($response);

        try {
            if(isset($data['error']) ) {
                throw new Exception('Ошибка оформления заказа');
            }
        } catch (Exception $e) {
            echo 'Внимание: ',  $e->getMessage(), "\n";
        }
        $final_price = (float) $price * $data['ratio'];

        return view('SeeDeliveryCost', [
            'price' => $final_price,
            'order_time' => $data['time'],
        ]);
    }


}
