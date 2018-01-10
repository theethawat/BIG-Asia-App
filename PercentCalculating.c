#include<stdio.h>
int main()
{
    float num;
    char mode;
    float count;
    int i=1;
    do{
    	printf("Percent Caluculating Programe  for percent calculate in BIG ASIA App \n");
    printf("Enter Order : ");
    scanf("%f",&num);
    printf("\n Enter All Order(a:GDP b:HDI c:Global Peace):");
    scanf(" %c",&mode);
    
    printf("%c \n",mode);

    if(mode=='a'){
        count=(191-num)*100/191;
    }

    if(mode=='b'){
        count=(188-num)*100/188;
    }

    if(mode=='c'){
        count=(162-num)*100/162;
    }

    printf("Your Input Percent is %.2f \n",count);
    printf("Continues Using Program type 1 Exit type 0:");
    scanf("%d",&i);
    printf("__________________________________\n");
	}
	while(i!=0);
    
    return 0;
}
