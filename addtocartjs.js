var cart=[];



$("#cartbtn").click(function(event)
{
    event.preventDefault();
    var name=$(this).attr("data-name");
    var price=Number($(this).attr("data-price"));
    console.log(name);
    console.log(price);
    addtocartitems(name,price,1);
    displaycart();
});
$(".clearcart").click(function(event)
{
    clearwholecart();
    displaycart();
}
);

function displaycart()
{
    var cartarray=listcart();
    var output="";
    output+=`<tr><th>Product Name</th><th>Qty.</th><th>Price</th><th>+</th><th>-</th><th>Delete</th></tr>`;
    for(var i in cartarray)
    {
        output+="<tr>"+"<td  >"+cartarray[i].name+"</td> "+"<td >"+cartarray[i].count+"</td>"+"<td >"+cartarray[i].total
        +"</td>"+"<td >"+"<button style='font-size:20px;padding:8px; border:none; background-color:lightgray; border-radius:5px;'  class='additem' data-name='"+cartarray[i].name+"'>+</button>"+"</td>"+
        "<td >"+
        "<button   style='font-size:20px;padding:8px; border:none; background-color:lightgray; border-radius:5px;' class='subitem' data-name='"+cartarray[i].name+"'>-</button>"+"</td>"
       +"<td >" +"<button  style='font-size:15px;padding:8px; border:none; background-color:lightgray; border-radius:5px;'  class='deleteitem' data-name='"+cartarray[i].name+"'>Delete</button>"+"</td>"+"</tr>";

    }
    $("#showcart").html(output);
    var a=totalpriceofallitems();
    
    $("#totalcart").html(a);

    var b=totalcountitems();
    $("#cartno").html(b);
}

$("#showcart").on("click",".deleteitem",function(event)
{
    var name=$(this).attr("data-name");
    removewholesingleitem(name);
    displaycart();
}
);

$("#showcart").on("click",".additem",function(event)
{
    var name=$(this).attr("data-name");
    addtocartitems(name,0,1);
    saveitemstolocalstorage();
    displaycart();
}
);


$("#showcart").on("click",".subitem",function(event)
{
    var name=$(this).attr("data-name");
    removequanityfromcart(name);
    saveitemstolocalstorage();
    displaycart();
}
);

var item=function(name,price,count)
{
    this.name=name;
    this.price=price;
    this.count=count;
};
//Adding to cart
function addtocartitems(name,price,count)
{
    for( var i in cart)
    {
        if(cart[i].name===name)
        {
            cart[i].count+=count;
            
            saveitemstolocalstorage();
            
            return;
        }
    }
    var cartitem=new item(name,price,count);
    console.log(cartitem);
    cart.push(cartitem);
    saveitemstolocalstorage();
  
    
}



//removing from cart
function removequanityfromcart(name,price)
{
    for( var i in cart)
    {
        if(cart[i].name===name)
        {
           
            cart[i].count--;
            
            if(cart[i].count===0)
            {
                cart.splice(i,1);
            }
        }
    }
    saveitemstolocalstorage();
}

//removing a row from cart single item

function removewholesingleitem(name)
{
    for( var i in cart)
    {
        if(cart[i].name===name)
        {
            cart.splice(i,1);
        }
    }
    saveitemstolocalstorage();

}
//savetolocalstorage
function saveitemstolocalstorage()
{
    localStorage.setItem("Shoppingcart",JSON.stringify(cart));
}
//clearwholecart
function clearwholecart()
{
    cart=[];

    saveitemstolocalstorage();
}


//total count of cart
function totalcountitems()
{
    var sum=0;
    for(var i in cart)
    {
        sum+=cart[i].count;

    }
    return sum;
    console.log(sum);
}


//total price of items

function totalpriceofallitems()
{
    var sum=0;
    for(var i in cart)
    {
        sum+=cart[i].price * cart[i].count;
        
    }
    return formatNumber(sum);
    console.log(sum);
}


function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}



function listcart()
{
    var cartcopy=[];
    for(var i in cart)
    {
        var item=cart[i];
        var itemcopy={};
        for(p in item)
        {
            itemcopy[p]=item[p];
        }
        itemcopy.total=(itemcopy.price*itemcopy.count);
        cartcopy.push(itemcopy);
        

    }
    
    return cartcopy;
    
}



function loaddatafromlocalstorage()
{
    cart=JSON.parse(localStorage.getItem("Shoppingcart"));
    if(cart==null)
    {
        clearwholecart();
    }
   
}
loaddatafromlocalstorage();
displaycart();

