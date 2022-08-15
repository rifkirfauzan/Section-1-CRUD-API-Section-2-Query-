var nilai = [23, 76, 45, 20, 70, 65, 15, 54]       
for(var i=0;i<nilai.length;i++)
        {    
             if(i == 0)
             { 
              var nilai_max = nilai[i];
             }
             else
             {
                    if(nilai[i] > nilai_max)
                    {
                      nilai_max = nilai[i];
                    }
             }              
        }  
				document.getElementById("demo").innerHTML = 'Data terbesar dari bilangan [23, 76, 45, 20, 70, 65, 15, 54] adalah'+nilai_max; 
 