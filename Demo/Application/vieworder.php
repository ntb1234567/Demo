
<div class="contentpanel" style="background-color: none">

  <div class="panel panel-default">

    <div class="panel-body">     
  
  <div class="row">
    <div class="col-md-12 mb30">
    <?php  foreach($OrderAddress as $OAValue1){  ?>
    <div class="row">
    <div class="col-lg-12"> 
    <?php 
    echo "<div class='col-lg-6'><h3>".lang('order_details').": <i>".$OAValue1['Store_Name']."</i></h3></div>"; 
    ?>   
    </div>        
    </div>
    <?php } ?>
  </div>
 </div>        
<hr>
  
<div class="row">
    <div class="col-md-12 mb30">
    <?php 
    if($TrackOrder != '') {
    foreach($TrackOrder as $TOValue){  ?>
    <div class="row">
    <div class="col-lg-12">
    <?php 
    echo "<div class='col-lg-3'>".$TOValue['Memo']."</div>"; 
    echo "<div class='col-lg-2'>".$TOValue['Day'].", ".$TOValue['History_Date']."</div>"; 
    echo "<div class='col-lg-2'>".$TOValue['History_Time']."</div>"; 
    ?>       
    </div>        
    </div>
    <?php } } else { ?>
    <div class="row">
    <div class="col-lg-12">
    <?php 
    echo "<div class='col-lg-12'></div>"; 
    ?>                                                                        
    </div>        
    </div>
    <?php } ?>
  </div>
 </div>        
<hr>
    
 <div class="row">
    <div class="col-md-12 mb30">
     	<div class="col-lg-6">
    		<div class='col-lg-12'>  
                <table class='col-lg-12'>
                	<tr>
                        <td class="table_border_top order_details_left"><?=lang('order_no')?>:</td>
                        <td class="table_border_top order_details_right"><?php echo $ViewOrderHdr[0]['Order_No']; ?></td>
                    </tr>
                    <tr>
                        <td class="order_details_left"><?=lang('order_date')?>:</td>
                        <td class="order_details_right"><?php echo $ViewOrderHdr[0]['Order_Date'].", ".$ViewOrderHdr[0]['Order_Time']; ?></td>
                    </tr>
                    
                    <tr>
                        <td class="order_details_left"><?=lang('delivery_date')?>:</td>
                        <td class="order_details_right"><?php echo $ViewOrderHdr[0]['Pref_Del_Date']?></td><!-- .", ".$ViewOrderHdr[0]['Pref_Del_Time_From'].'-'.$ViewOrderHdr[0]['Pref_Del_Time_To'];  -->
                    </tr>
                    
                    <tr>       
                        <td class="order_details_left"><?=lang('payment_mode')?>:</td>
                        <td class="order_details_right"><?php echo ucwords(str_replace('_',' ',$ViewOrderHdr[0]['Payment_Type'])); ?></td>
                    </tr>
                    <tr>       
                        <td class="order_details_left"><?=lang('payment_status')?>:</td>
                        <td class="order_details_right"><?php echo $ViewOrderHdr[0]['Payment_Status']; ?></td>
                    </tr>
                     <tr>       
                        <td class="order_details_left"><?=lang('delivery_type')?>:</td>
                        <td class="order_details_right">
                            <?php
                                
                                if($ViewOrderHdr[0]['Del_Type'] == '1')
                                {
                                    $DeliveryType = "Home Delivery";
                                }
                                else if($ViewOrderHdr[0]['Del_Type'] == '2') 
                                {
                                    $DeliveryType = "Store Pickup";
                                }
                                //print_r($ViewOrderHdr);exit;
                                echo $DeliveryType;
                            ?>
                        </td>
                    </tr>
                    <!----------Order Weight-------------------2-Feb-2017------------------>
                     <tr>       
                        <td class="order_details_left"><?=lang('total_weight_kg')?>:</td>
                            <td class="table_border_top order_details_right"><?php echo $ViewOrderHdr[0]['Total_Weight']; ?></td>
                        </td>
                    </tr>
                    <!----------Order Weight-------------------2-Feb-2017------------------>
                    			
                    <tr>
                        <td class="order_details_left"><?=lang('order_amount')?>:</td>
                        <td class="order_details_right"><i class="fa fa-rupee icon_padding"></i><?php echo ($ViewOrderHdr[0]['Order_Amount'] - $ViewOrderHdr[0]['Delivery_Charges']); ?></td>
                    </tr>

                    <tr>
                        <td class="order_details_left"><?=lang('delivery_charges')?>:</td>
                        <td class="order_details_right">
                            <?php if($ViewOrderHdr[0]['Delivery_Charges']!="" and $ViewOrderHdr[0]['Delivery_Charges']!="0" and $ViewOrderHdr[0]['Delivery_Charges']!="0.00"){ ?>
                                <i class="fa fa-rupee icon_padding" ></i><?php echo $ViewOrderHdr[0]['Delivery_Charges']; ?>
                            <?php } else { ?>
                                -
                            <?php } ?>
                        </td>
                    </tr>
                		
                    <tr>
                        <td class="order_details_left"><?=lang('discount')?>:</td>
                        <td class="order_details_right">
                		<?php if($ViewOrderHdr[0]['Header_Discount']!="" and $ViewOrderHdr[0]['Header_Discount']!="0" and $ViewOrderHdr[0]['Header_Discount']!="0.00"){ ?>
                		  <i class="fa fa-rupee icon_padding"></i><?php echo $ViewOrderHdr[0]['Header_Discount']; ?>
                		<?php } else { ?>
                                -
                            <?php } ?>
                		</td>
                    </tr>
                    
                    <tr>
                        <td class="order_details_left"><?=lang('saving')?>:</td>
                        <td class="order_details_right"><i class="fa fa-rupee icon_padding"></i><?php echo $ViewOrderHdr[0]['Saving_Amount']; ?></td>
                    </tr>
                    									
                    <tr>
                        <td class="order_details_left"><?=lang('total')?>:</td>
                        <td class="order_details_right"><i class="fa fa-rupee icon_padding"></i><?php echo $ViewOrderHdr[0]['Net_Amount']; ?></td>
                    </tr>	
                	<?php if(!empty($ViewOrderHdr[0]['Promo_Code'])) { ?>
                	<tr>
                		<td class="order_details_left"><?=lang('promo_code')?>:</td>
                		<td class="order_details_right"><?php echo $ViewOrderHdr[0]['Promo_Code']." <br>(".$ViewOrderHdr[0]['Offer_Desc'].") "; ?></td>
                	</tr>	
                	<?php } ?>
                </table>
    		</div>
    	</div>
    	 
        <?php if(!empty($OrderAddress)) {
            foreach($OrderAddress as $OAValue) {  ?>
                <div class="col-lg-3">
            		<?php 
            		$Flat_No="";
            		$Area_Name="";
            		$Address="";
            		$City_Name="";
            		$State_Name="";
            		$Email_ID="";
            		//$Contact_No=$OAValue['Mobile_No'];
            		$Landmark="";
            		if(!empty($OAValue['Flat_No'])){ $Flat_No = $OAValue['Flat_No'].", ";}			
            		if(!empty($OAValue['Address'])){ $Address = $OAValue['Address'].",<br>";}			
            		if(!empty($OAValue['Landmark'])){ $Landmark = $OAValue['Landmark'].",<br>";}
            		if(!empty($OAValue['Area_Name'])){ $Area_Name = $OAValue['Area_Name'].", ";}
            		if(!empty($OAValue['City_Name'])){ $City_Name = $OAValue['City_Name'].", ";}
            		if(!empty($OAValue['State_Name'])){ $State_Name = $OAValue['State_Name'].",<br>";}
            		if(!empty($OAValue['Email_ID'])){ $Email_ID = $OAValue['Email_ID'].".<br>";}
            		if(!empty($OAValue['Contact_No'])){ $Contact_No = $OAValue['Contact_No'];}		
            		
            		echo "<div class='col-lg-12'>";	
            		echo "<b>".$OAValue['Name']."</b>,<br> ";
            		echo $Flat_No.$Address.$Landmark.$Area_Name.$City_Name.$State_Name;	      	      
            		echo $Email_ID;
            		echo $Contact_No;
            		echo "</div>";  
            		?>
                </div>
            <?php }
        } else { ?>
            <div class="col-lg-3">
                <?php echo "<div class='col-lg-12'>Address Not Found.</div>"; ?>
            </div>
        <?php } ?>
        
        
        <?php  if($OrderAddress != '') {
            foreach($OrderAddress as $OAValue) {  ?>
                <div class="col-lg-4">
                    <?php 
                    echo "<div class='col-lg-12'><b>".$OAValue['Store_Name']."</b>,<br> ".$OAValue['Store_Address1'].", ".$OAValue['Store_City_Name'].",<br> ".$OAValue['Store_State_Name'].", <br>".$OAValue['Store_Area_Name'].", <br>".$OAValue['Store_Mobile_No_1']."</div>"; 
                    ?>
                </div>
            <?php } 
        } else { ?>
            <div class="col-lg-4">
            <?php 
            echo "<div class='col-lg-12'>Address Not Found.</div>"; 
            ?>
            </div>        
        <?php } ?>
        
      </div>
     </div>        
    <hr>

    
    
    <div class="row">
    <div class="col-md-12 mb30">
        <div class="row"> 
            <div class='col-lg-2'><?=lang('product')?></div>
            <div class='col-lg-2'><?=lang('photo')?></div>
            <div class='col-lg-1'><?=lang('volume')?></div>
            <div class='col-lg-1'><?=lang('weight_kg')?></div>
            <div class='col-lg-1'><?=lang('order_qty')?></div>                                
            <div class='col-lg-2'><?=lang('order_amt')?></div>
            <div class='col-lg-1'><?=lang('pick_qty')?></div> 
            <div class='col-lg-1'><?=lang('pick_amt')?></div> 
        </div>

        <hr>
        <?php 
        if($ViewOrder != ''){

            foreach($ViewOrder as $value){  
            
                $DBImage;
                if($value['Image_Url'] != '' OR $value['Image_Url'] != null)
                {
                    $handle = curl_init(base_url()."images/Upload/Article/".$value['Image_Url']);
                    curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
                    
                    $DBImage =  base_url()."images/Upload/Article/".$value['Image_Url']; 
                    
                    $response = curl_exec($handle);

                    $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
                    if($httpCode == 404) 
                    {                            
                        $DBImage =  base_url()."images/Upload/No_Image.png";
                    }
                    curl_close($handle);
                                             
                } else { $DBImage =  base_url()."images/Upload/No_Image.png"; }
                ?>

            <div class="row">
                <div class="col-lg-12"> 
                    <?php 
                    echo "<div class='col-lg-2'>".stripslashes($value['Article_Desc'])."</div>"; 
                    echo "<div class='col-lg-2'><img src='".$DBImage."' width='150' height='100' style='border: solid 1px;' /></div>"; 
                    echo "<div class='col-lg-1'>".floatval($value['Valume'])." ".$value['Unit']."</div>"; 
                    echo "<div class='col-lg-1'>".$value['Item_Weight']."</div>";
                    echo "<div class='col-lg-1'>".$value['Order_Quantity']."</div>"; 
                    echo "<div class='col-lg-2'>".$value['Order_Amount']."</div>";
                    
                    echo "<div class='col-lg-1'>".$value['Pick_Quantity']."</div>";
                    echo "<div class='col-lg-1'>".$value['Pick_Amount']."</div>";
                    ?>       
                </div>        
            </div>

            <?php }
        } else{ ?>
            <div class="row">
                <div class="col-lg-12">
                	<div class="col-lg-12">Products Not Found.</div>
                </div>
            </div>
        <?php } ?>
      </div>
     </div>        
    </div>
    <hr>
</div><!-- contentpanel -->

</div>        
</div>
