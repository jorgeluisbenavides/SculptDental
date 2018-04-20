<?php
if(!empty($customers ))  
{ 

    $outputhead = '';
    $outputbody = '';  
    $outputtail ='';

    $outputhead .= '<div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>Folio</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Registrado</th>
                            </tr>
                        </thead>
                        <tbody>
                ';
                  
    foreach ($customers as $customer)    
    {   
    $body = substr(strip_tags($customer->body),0,50)."...";
    $show = $customer->id;
    $outputbody .=  ' <tr> 
                                <td><input type="radio" name="idCusomer" id="idCusomer" value="'.$show.'"></td>
		                        <td>'.$customer->folio.'</td>
		                        <td>'.$customer->name.'</td>
		                        <td>'.$customer->last_name_one." ".$customer->last_name_two.'</td>
                                <td>'.$customer->created_at.'</td>
                            </tr> 
                    ';
                
    }  

    $outputtail .= ' 
                        </tbody>
                    </table>
                </div>';
         
    echo $outputhead; 
    echo $outputbody; 
    echo $outputtail; 

 }  
 
 else  
 {  
    echo 'Data Not Found';  
 } 
 ?>