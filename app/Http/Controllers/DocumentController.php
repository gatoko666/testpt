<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    
    public function uploadFile(){
        return view('/proyectotitulo/public/user/uploadfile');
        
    }



    /** Example of File Upload */
    public function uploadFilePost(Request $request){
       
        $request->validate([
            'fileToUpload' => 'required|file|max:2048',
        ]);
       

        $file = $request->file('fileToUpload');

                //no files larger than 700kb
                /*
                if ($request->getSize() > 2000000)
                {
                    { echo "Sorry, your file is too large."; }

                }

                if ($request->getClientMimeType() !== 'application/pdf')
                    {
                        { echo "respond not validated, invalid file type."; }
                       
                    }
*/

        $fileName = "fileName".time().'.'.request()->fileToUpload->getClientOriginalExtension();

        $request->fileToUpload->storeAs('Documentos',$fileName);

        return back()
            ->with('Éxito','Documento subido correctamente.');

    }





}
