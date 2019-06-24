<?php







if (strtolower($message['text']) == "請選擇產品類別" || $message['text'] == "產品介紹") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
 

          array (
            'type' => 'flex',
            'altText' => '已傳送給您產品分類目錄',
            'contents' => 
            array (
              'type' => 'bubble',
              'direction' => 'ltr',
              'header' => 
              array (
                'type' => 'box',
                'layout' => 'vertical',
                'contents' => 
                array (
                  0 => 
                  array (
                    'type' => 'text',
                    'text' => 'KeyWater',
                    'size' => 'xxl',
                    'align' => 'center',
                    'weight' => 'bold',
                    'color' => '#1D608E',
                  ),
                ),
              ),
              'body' => 
              array (
                'type' => 'box',
                'layout' => 'vertical',
                'contents' => 
                array (
                  0 => 
                  array (
                    'type' => 'button',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => '特規雙道過濾器',
                      'uri' => 'http://keywater.nctu.me/two-way.html',
                    ),
                  ),
                  1 => 
                  array (
                    'type' => 'button',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => '全戶式過濾器',
                      'uri' => 'http://keywater.nctu.me/allho.html',
                    ),
                  ),
                  2 => 
                  array (
                    'type' => 'button',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => '氫水機',
                      'uri' => 'http://keywater.nctu.me/machine.html',
                    ),
                  ),
                  3 => 
                  array (
                    'type' => 'button',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => '艾堤普',
                      'uri' => 'http://keywater.nctu.me/optipure.html',
                    ),
                  ),
                  4 => 
                  array (
                    'type' => 'button',
                    'action' => 
                    array (
                      'type' => 'uri',
                      'label' => 'RO膜',
                      'uri' => 'http://keywater.nctu.me/RO.html',
                    ),
                  ),
                ),
              ),
              'styles' => 
              array (
                'header' => 
                array (
                  'backgroundColor' => '#BEE4F0',
                ),
              ),
            ),
          )

      
          )
        ));
    }
    
    


    if (strtolower($message['text']) == "聯絡我們" || $message['text'] == "聯絡") {
      $client->replyMessage(array(
          'replyToken' => $event['replyToken'],
          'messages' => array(
   
            array (
              'type' => 'flex',
              'altText' => '已傳送給您聯絡資訊',
              'contents' => 
              array (
                'type' => 'bubble',
                'direction' => 'ltr',
                'body' => 
                array (
                  'type' => 'box',
                  'layout' => 'vertical',
                  'contents' => 
                  array (
                    0 => 
                    array (
                      'type' => 'text',
                      'text' => 'KeyWater',
                      'size' => 'xl',
                      'align' => 'start',
                      'weight' => 'bold',
                      'color' => '#3D94C5',
                    ),
                    1 => 
                    array (
                      'type' => 'separator',
                      'margin' => 'lg',
                      'color' => '#C7C7C7',
                    ),
                    2 => 
                    array (
                      'type' => 'text',
                      'text' => '鄒永僖',
                      'margin' => 'lg',
                      'size' => 'xl',
                      'weight' => 'bold',
                      'color' => '#414141',
                    ),
                    3 => 
                    array (
                      'type' => 'separator',
                      'margin' => 'md',
                      'color' => '#FFFFFF',
                    ),
                    4 => 
                    array (
                      'type' => 'box',
                      'layout' => 'baseline',
                      'spacing' => 'md',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'icon',
                          'url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Gmail_Icon.svg/600px-Gmail_Icon.svg.png',
                        ),
                        1 => 
                        array (
                          'type' => 'text',
                          'text' => 'Keywater1106@gmail.com',
                          'flex' => 0,
                          'color' => '#818181',
                        ),
                      ),
                    ),
                    5 => 
                    array (
                      'type' => 'box',
                      'layout' => 'baseline',
                      'spacing' => 'md',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'icon',
                          'url' => 'https://support.casio.com/global/tw/wat/manual/5413_tw-zh/fig/phone-s_VPCVILerrlqhhw.png',
                        ),
                        1 => 
                        array (
                          'type' => 'text',
                          'text' => '0934 185 225',
                          'color' => '#818181',
                        ),
                      ),
                    ),
                    6 => 
                    array (
                      'type' => 'box',
                      'layout' => 'baseline',
                      'spacing' => 'md',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'icon',
                          'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdmbJdiSMdowcHoMrQIBScs4zasdaHdmTpqbYgpnEWni5ltLvx',
                        ),
                        1 => 
                        array (
                          'type' => 'text',
                          'text' => 'ID: 0934185226',
                          'color' => '#818181',
                        ),
                      ),
                    ),
                    7 => 
                    array (
                      'type' => 'box',
                      'layout' => 'baseline',
                      'spacing' => 'md',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'icon',
                          'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSb46dA4y7iNgnssgNgdyu8liF7ggTYdJdke_TrnVCE13wbVRy7',
                        ),
                        1 => 
                        array (
                          'type' => 'text',
                          'text' => 'ID: keywater1106',
                          'color' => '#818181',
                        ),
                      ),
                    ),
                  ),
                ),
                'footer' => 
                array (
                  'type' => 'box',
                  'layout' => 'horizontal',
                  'contents' => 
                  array (
                    0 => 
                    array (
                      'type' => 'box',
                      'layout' => 'horizontal',
                      'contents' => 
                      array (
                        0 => 
                        array (
                          'type' => 'image',
                          'url' => 'https://lh3.googleusercontent.com/loNk8jzjdgejs-Z2AhcDOiBAUdclsJbK1Ahknp5mkjqqkLTSoIFwH77UhSpWTFF7wg',
                          'size' => 'xs',
                          'action' => 
                          array (
                            'type' => 'uri',
                            'uri' => 'tel:0934185225',
                          ),
                        ),
                        1 => 
                        array (
                          'type' => 'text',
                          'text' => '撥打電話',
                          'size' => 'lg',
                          'gravity' => 'center',
                          'weight' => 'bold',
                          'color' => '#5A6267',
                          'action' => 
                          array (
                            'type' => 'uri',
                            'uri' => 'tel:0934185225',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            )
        
            )
          ));
      }
      
    





      if (strtolower($message['text']) == "q" || $message['text'] == "Q") {
        $client->replyMessage(array(
            'replyToken' => $event['replyToken'],
            'messages' => array(
     
              array (
                'type' => 'flex',
                'altText' => '已傳送QRcode',
                'contents' => 
                array (
                  'type' => 'bubble',
                  'direction' => 'ltr',
                  'header' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => 'K．System',
                        'size' => 'xxl',
                        'align' => 'center',
                        'weight' => 'bold',
                        'color' => '#1D608E',
                      ),
                    ),
                  ),
                  'hero' => 
                  array (
                    'type' => 'image',
                    'url' => 'https://kwater.herokuapp.com/assets/QRcode.png',
                    'size' => 'full',
                    'aspectRatio' => '1.51:1',
                    'aspectMode' => 'fit',
                  ),
                  'body' => 
                  array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'text',
                        'text' => '立即掃描即可加入 !',
                        'align' => 'center',
                      ),
                    ),
                  ),
                ),
              )

    
          
              )
            ));
        }




        
      if (strtolower($message['text']) == "TEST" || $message['text'] == "測試") {
        $client->replyMessage(array(
            'replyToken' => $event['replyToken'],
            'messages' => array(
     
              array (
                'type' => 'flex',
                'altText' => 'LIFF測試',
                'contents' => 
                array (
                  'type' => 'bubble',
                  'direction' => 'ltr',
                  'footer' => 
                  array (
                    'type' => 'box',
                    'layout' => 'horizontal',
                    'contents' => 
                    array (
                      0 => 
                      array (
                        'type' => 'button',
                        'action' => 
                        array (
                          'type' => 'uri',
                          'label' => '測試liff',
                          'uri' => 'line://app/1571536843-Nm61BmoR',
                        ),
                      ),
                    ),
                  ),
                ),
              )
    
          
              )
            ));
        }











?>


