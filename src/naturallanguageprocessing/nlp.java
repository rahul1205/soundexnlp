package naturallanguageprocessing;
import java.util.Scanner;
public class nlp { 
	  

		private static Scanner in1;
		private static Scanner in2;


		public static String soundex(String s) { 
	        char[] x = s.toCharArray();
	        char firstLetter = x[0];
		                
	        
	        // convert letters to numeric code
	        for (int i = 1; i < x.length; i++) {
	            switch (x[i]) {
	            case 'ं'	:
	            case 'ः':
	            case 'ऄ':
	            case 'ऍ'	:
	            case '़'	:
	            case 'ऽ'	:
	            case '्'	:
	            case 'ॎ'	:
	            case 'ॏ'	:
	            case 'ॐ':
	            case '॑'	:
	            case '॒'	:
	            case '॓'	:
	            case '॔'	:	
	            case 'ॕ'	:	
	            case 'ॖ'	:
	            case 'क़':
	            case 'ख़':
	            case 'ग़'	:
	            case 'ज़':
	            case 'ड़'	:
	            case 'ढ़'	:
	            case 'फ़':
	            case 'य़'	:
	            case '।'	:
	            case '॥'	:
	            case '॰'	:
	            case 'ॱ'	:
	            case 'ॲ':
	            case 'ॳ'	:
	            case 'ॴ'	:
	            case 'ॵ'	:
	            case 'ॶ'	:
	            case 'ॷ'	:
	            case 'ॸ'	:
	            case 'ॹ'	:{ x[i] = '0'; break; }
	            
	            
	            case 'अ':
	            case 'आ':
	            case 'ा':{ x[i] = 'A'; break; }
	            
	            
	            case 'इ'	:
	            case 'ई':
	            case 'ि':
	            case 'ी':{ x[i] = 'B'; break; }
	            
	            
	            case 'उ'	:
	            case 'ऊ':
	            case 'ु':
	            case 'ू':{ x[i] = 'C'; break; }
	            
	            
	            case 'ऎ'	:
	            case 'ए'	:
	            case 'ऐ'	:
	            case 'ॆ':
	            case 'े':
	            case 'ै':
	            case 'ॉ':{ x[i] = 'D'; break; }
	
	            
	            case 'ऑ':
	            case 'ऒ':
	            case 'ओ':
	            case 'औ':
	            case 'ॊ':
	            case 'ो':
	            case 'ौ':
	            case 'ॅ':
	            case 'ॗ' :{ x[i] = 'E'; break; }
	            
	            
	            case 'क':
	            case 'ख':
	            case 'ग'	:
	            case 'घ'	:{ x[i] = 'F'; break; }
	            
	            
	            case 'ङ':
	            case 'ञ':{ x[i] = 'G'; break; }
	            
	            
	            case 'च'	:
	            case 'छ':
	            case 'ज':
	            case 'झ':{ x[i] = 'H'; break; }
	            
	            
	            case 'ट':
	            case 'ठ':
	            case 'ड'	:
	            case 'ढ':{ x[i] = 'I'; break; }
	            
	            
	            case 'ण':
	            case 'ॺ' :
	            case 'ॻ'	:{ x[i] = 'J'; break; }
	            
	            
	            case 'त':
	            case 'थ'	:
	            case 'द':
	            case 'ध'	:{ x[i] = 'K'; break; }
	                

	            case 'ऩ'    	:{ x[i] = 'L'; break; }

	            
	            case 'फ':
	            case 'ब'	:
	            case 'प':
	            case 'भ'	:{ x[i] = 'M'; break; }
	            
	            
	            case 'म':{ x[i] = 'N'; break; }
	            
	            
	            case 'य'	:{ x[i] = 'O'; break; }
	            

	            case 'ऱ':
	            case 'ृ':
	            case 'ॠ':
	            case 'ॽ'	:
	            case 'ॾ'	:
	            case 'ऋ':
	            case 'र':
	            case 'ॄ':{ x[i] = 'P'; break; }
	            
	            
	            case 'ल'	:
	            case 'ळ':
	            case 'ऴ':
	            case 'ॡ':
	            case 'ॢ'	:
	            case 'ॼ':
	            case 'ऌ':
	            case 'ॣ'	:{ x[i] = 'Q'; break; }
	            
	            
	            case 'व'	:{ x[i] = 'R'; break; }
	            
	            
	            case 'श':
	            case 'ष':
	            case 'स'	:{ x[i] = 'S'; break; }
	            
	            
	            case 'ह':{ x[i] = 'T'; break; }
	            

	            case '0':{ x[i] = '0'; break; }
	            case '1':{ x[i] = '1'; break; }
	            case '2':{ x[i] = '2'; break; }
	            case '3':{ x[i] = '3'; break; }
	            case '4':{ x[i] = '4'; break; }
	            case '5':{ x[i] = '5'; break; }
	            case '6':{ x[i] = '6'; break; }
	            case '7':{ x[i] = '7'; break; }
	            case '8':{ x[i] = '8'; break; }
	            case '9':{ x[i] = '9'; break; }
	            
	            
  
	           }
	        }

	        
	        String output = firstLetter + "" ;
	        for (int i = 1; i < x.length; i++)
	     
	                output += x[i];

	        
	        
	        return output;
	    }


	    public static void main(String[] args) {
	    	String name1,name2;	    	
	    	in1 = new Scanner(System.in);
	    	in2 = new Scanner(System.in);

	        System.out.print("enter a string1");
	        name1=in1.nextLine();
	        String code1 = soundex(name1);
	        System.out.println(code1);
	     	char[] a = name1.toCharArray();
	        
	        
	        
	        System.out.print("enter a string2");
	        name2=in2.nextLine();        
	        String code2 = soundex(name2);
	        System.out.println(code2);
	        char[] b = name2.toCharArray();
	        
	        
	        /*
	     	System.out.print("enter a string3");
	        name3=in.nextLine();	     
	        String code3 = soundex(name3);
	        System.out.println(code3);
	    	*/
      
	        if(code1.equals(code2)){
	        	System.out.println("strings matched");
	        }	
	        	
	        else{
	        //match strings
	        int counter = 0;
	        if(a.length==b.length){
	        for (int i = 0; i<b.length; i++){
	        
	        	if(a[i]==b[i])
	        		counter++;
	        	}
	        }
	        
	        
	        
	        if(counter==(a.length-1) || counter==(a.length-2) || counter==a.length){      
	        System.out.println("strings maybe matching");}
	        	 
	        else{
	        	System.out.println("strings not matching");
	        }
	        
	        } 
	    }
	 
}
																																																																																																																				
