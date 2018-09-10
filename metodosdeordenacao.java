package metodosdeordenacao;

import java.util.Random;

public class Metodosdeordenacao {

    public static void main(String[] args) {
      int[] myarray = new int[10];
      createArray(myarray);
      int [] b = myarray.clone();
      int [] c = myarray.clone();
     // mostraarray(myarray);
      System.out.println("array buble sort ordenation:");
      bubblesort(myarray);
      System.out.println("array insertion sort ordenation:");
      insertionsort(b);
     //mostraarray(b);
      System.out.println("array selection sort ordenation:");
      selectionsort(c);
      //mostraarray(c);
    }
    public static void createArray(int myarray[]){
      int size = myarray.length;
      Random numRand = new Random();
      for(int i=0; i<size;myarray[i++]=numRand.nextInt(size*100));
    }
    public static void bubblesort(int array[]){
        long swaps=0,comparison=0;
        long tmpini=System.currentTimeMillis();
        for(int k=1;k<array.length;k++){            
            for(int j=0;j<array.length-1;j++){
                comparison++;
                if(array[j]>array[j+1]){
                    swaps++;
                    int aux=array[j];
                    array[j]=array[j+1];
                    array[j+1]=aux;
                }
            }
        }
        System.out.println("comparaçoes:"+comparison);
        System.out.println("trocas:"+swaps);
        System.out.println("tempo:"+(System.currentTimeMillis()-tmpini));
       }   
    public static void insertionsort(int array[]){
        long troca=0,comp=0;
        long tmpini=System.currentTimeMillis();
        for (int i = 0; i < array.length; i++) {
            int cpNumero = array[i];
            int j = i;
            while (j > 0 && cpNumero < array[j-1]) {
            	array[j] = array[j-1];
                j--;
                comp++;
            }
            array[j] = cpNumero;
            troca++;
        }     
        System.out.println("comparaçoes:"+comp);
        System.out.println("trocas:"+troca);
        System.out.println("tempo:"+(System.currentTimeMillis()-tmpini));
    }
    public static void selectionsort(int array[]){
        long troca=0,comp=0;
        long tmpini=System.currentTimeMillis();
        for (int i = 0; i < array.length - 1; i++){
            int aux = i;
            for (int j = i + 1; j < array.length; j++){
             	if (array[j] < array[aux]){ 
             		aux = j;
                	comp++;
                }
            }
            int a = array[aux];  
            array[aux] = array[i];
            array[i] = a;
            troca++;
        }           
        System.out.println("comparaçoes:"+comp);
        System.out.println("trocas:"+troca);
        System.out.println("tempo:"+(System.currentTimeMillis()-tmpini));
    }
    public static void mostraarray(int array[]){
    for (int c=0;c<array.length;c++){
        System.out.println(array[c]);
        }
      
    }
}
  
