// item_name= [];
// item_qty = [];
// item_price=[];

// function add(){
//     item_name.push(document.getElementById('pname').value);
//     item_qty.push(parseInt(document.getElementById('qty').value));
//     item_price.push(parseInt(document.getElementById('price').value));
//     displaycart()
// }
// function displaycart(){
//     cartdata = "<table><tr><th>item</th><th>item qty</th><th>item price</th><th>total Price</th>"
//     total=0;
//     for(i=0;i<item_name.length;i++){
//         total += item_qty[i]*item_price;
//         cart += "<tr><td>" +item_name[i]+"</td><td>"+
//         item_qty[i]+"</td<td>"+item_price[i]+"</td><td>"+
//         item_qty[i]*item_price[i]+"</td><td><button onclick='delete("+ i +")'Delete</button></td></tr>"
//     }
//     cartdata += '<tr><td></td><td></td><td></td><td>'+total+'</td></tr></table>'
//     document.getElementById('cart').innerHTML=cartdata;
// }
// function del(a){
//     item_name.splice(a,1);
//     item_qty.splice(a,1);
//     item_price.splice(a,1);
//     displaycart();

// }

var product=[];

function fun(){
  var x={};
  x.price=document.getElementById('box2').value;
  x.title=document.getElementById('item').value;
  x.qty=document.getElementById('box1').value;
  x.total=document.getElementById('result').value;
 
  product.push(x);
    
  var iDiv = document.createElement('div');
  iDiv.id = product.length;
  iDiv.className = 'block';
  document.getElementsByTagName('body')[0].appendChild(iDiv);
  
  var para = document.createElement("span");
  var node = document.createTextNode('Item Name: ' + x.title+' |                    ');
  para.appendChild(node);
 
  var element = document.getElementById(product.length);
  element.appendChild(para);
  
  var para = document.createElement("span");
  var node = document.createTextNode('Item Quantity: ' + x.qty+' |                    ');
  para.appendChild(node);
 
  var element = document.getElementById(product.length);
  element.appendChild(para);
  
  var para = document.createElement("span");
  var node = document.createTextNode('Per Unit Price: ' + x.price+' |                    ');
  para.appendChild(node);


  var element = document.getElementById(product.length);
  element.appendChild(para);
  
  para = document.createElement("span");
  node = document.createTextNode('Grand Total: '+ x.total);
  para.appendChild(node);
  
  element.appendChild(para);
}