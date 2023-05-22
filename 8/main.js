
//プルダウンリストの取得
    let select_jpn = document.getElementById('selected_jpn').value;
    let select_en = document.getElementById('selected_en').value;
    let select_all = document.getElementById('selected_all');
//テーブルの取得    
  let table_ja = document.getElementById('tr_ja');
  let table_en = document.getElementById('tr_en');

 function changeLang(){
  //selectタグを取得
    let select_areas = document.getElementById('select_area').value;
  
    if(select_areas == select_jpn){
      table_ja.style.display = 'block';
      table_en.style.display='none';
    }else if(select_areas == select_en){
      table_en.style.display='block';
      table_ja.style.display = 'none';
    }else{
      table_ja.style.display = 'block';
      table_en.style.display='block';
    }
}