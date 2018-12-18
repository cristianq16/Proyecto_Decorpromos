<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mail;
use Session;
use Redirect;
use App\Form;

class ReciboDatos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            // Form::create($request->all());
            $data = $request->all();

            Form::create([
            'nombre' => $data['nombre'],
            'ciudad' => $data['ciudad'],
            'barrio' => $data['barrio'],
            'telefono' => $data['telefono'],
            'email' => $data['email'],
            'opcion' => $data['medidas'],
            'usos' => $data['uso'],
            'informacion' => $data['informacion']
        ]);

        // require 'PHPMailer/src/Exception.php';
        // require 'PHPMailer/src/PHPMailer.php';
        // require 'PHPMailer/src/SMTP.php';
        
        Mail::send('emails.contacts', $data, function($msj){
            $ultimo_id = Form::get()->last();
            $msj->subject('Cotizacion de cliente #'.$ultimo_id['id']);
            $msj->to('cristiancq16@gmail.com');
        });

        Session::flash('Mensaje enviado correctamente');
        return Redirect::to('/');
        // $mail = new PHPMailer();
        //     try{
        //         $mail->isSMTP();
        //         $mail->SMTPAuth = true;
        //         $mail->SMTPSecure = 'tls';
        //         $mail->Host = 'smtp.gmail.com';
        //         $mail->Port = 587;
        //         $mail->Username = 'cristianq@uninorte.edu.co';
        //         $mail->Password = 'Teniscristian.123';
        //         $mail->setFrom('cristianq@uninorte.edu.co', 'Cotizacion de cliente #'.$ultimo_id["id"]);
        //         $mail->addAddress('cristiancq16@gmail.com', 'Cristian');
        //         $mail->Subject = 'Cliente : '.$data['nombre'].' Cotizacion: #'.$ultimo_id["id"];
        //         $mail->Body ='<b>Nombre del cliente: </b>'.$data['nombre'].'<br>'. '<b>Ciudad: </b>'.$data['ciudad'].'<br>'.'<b>Barrio: </b>'.$data['barrio'].'<br>'.'<b>Telefono: </b>'.$data['telefono'].'<br>'.'<b>E-mail: <b>'.$data['email'].'<br>'.'<b> Tiene medidas: </b>'.$data['medidas'].'<br>'.'<b>Uso: </b>'.$data['uso'] .'<br>'.'<b>Que desea cotizar: </b>'.$data['informacion'];
        //         $mail->isHTML(true);
        //         if ($mail->send()) {
        //         }else{
        //         echo $mail->ErrorInfo;
        //         }
        //     }catch(Exception $e){
        //         echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        //     }

        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
