<style type="text/css">
html{
    scroll-behavior:smooth;
}


*{
    margin:0;
    padding:0;
   box-sizing:border-box;
   font-family: 'Muli', sans-serif;

}

h3{
    font-size:40px;
    font-weight:500px;
}

.row{ margin-left:0!important;margin-right:0!important;}

.nav_style{
    background-color: #a29bfe !important;
}

.nav_style a{
    color: white !important;
}

 nav ul li:hover{
    border-top:10px;
     background-color:red;
    

}






#covid{
    font-size:30px !important;
    font-weight:500px !important;
}




/**** mainheader********* */

.main_header{
    height:450px;
    width:100%;
    }



.rightside h1{
    font-size:2.9rem;
}

.corona_rot img{
    animation:gocorona 3s linear infinite;
}

@keyframes gocorona{
    0%{
        transform:rotate(0deg);
    }
    100%{
        transform:rotate(360deg);
    }
}



.leftside img{
    animation:heartbeat 5s linear infinite;
}

@keyframes heartbeat{
    0%{
        transform:scale(0.75)
    }
    20%{
        transform:scale(1)
    }
    40%{
        transform:scale(0.75)
    }
    60%{
        transform:scale(1)
    }
    80%{
        transform:scale(0.75)
    }
    100%{
        transform:scale(.75)
    }
}



/* ***********corona update ************ */

.corona_update{
    margin:0 0 30px 0;
}

.corona_update h3{
    color:#ff7675;
}


.corona_update h1{
    text-align:center;
    font-size:2rem;
}

.search-box{
    background:#DAA520;
    width:300px;
    border-radius:40px;
    height:40px;
    margin-bottom:8px;

}

 .search-btn{
    color:#fff;
    float:right;
    width:30px;
    height:30px;
    border-radius:50%;
    background:#DAA520;
    display:flex;
    margin:3px;
    justify-content:center;
    align-items:center;
} 

.searchCountry{
    border:none;
    background:none;
    outline:none;
    color:#fff;
    margin:6px;
    padding:0 3px 0px 22px;
    font-size:16px;
    justify-content:center;
    transition:0.4s;
    width:250px;
    
}


.search-box1{
    
    
    background:#d9b99b;
    margin-bottom:8px;
    width:250px;
    border-radius:40px;
    height:40px;

}


.search-btn1{
    color:#fff;
    float:right;
    width:30px;
    height:30px;
    border-radius:50%;
    background:#d9b99b;
    display:flex;
    margin:3px;
    justify-content:center;
    align-items:center;
}

.searchCountry1{
    border:none;
    background:none;
    outline:none;
    float:left;
    padding:0 3px 0px 14px;
    margin:6px;
    color:#fff;
    font-size:16px;
    transition:0.4s;
    line-height:30px;
    width:200px;

}


.table.sticky th{
    background-color:#FF8C00;
    position:sticky;
    top:0;
}


/* ************about Section************ */

.sub_section{
    background-color:#fafbfd;
}

.footer_style{
    background-color:#a29bfe !important;
}

.footer_style p{
    margin:0 !important;
}


#myBtn{
     display: none; 
     position: fixed;
     bottom: 20px;
     right: 40px;
     z-index: 99;
     border: 99;
     color: #fff;
     background: #00abff;
     padding: 10px;
     border-radius: 10px;

 }


 #myBtn:hover{
     background: #606060;

 }


 /* ********media queries********** */

 @media(max-width:780px){
     .main_header{
         height:700px;text-align:center:}

         .main_header h1{
             text_align:center;
             padding:8px;
             width:100%;
             font-size:30px;
         }
         .count_style{
             display:inline !important;

         }

         .count_style p{
             text-align:center;
         }

         .about_res{
             margin-left:0!important;
         }
     }
 }
</style>