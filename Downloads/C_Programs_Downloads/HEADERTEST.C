#include<stdio.h>
#include<conio.h>
#include<MyHeader.h> /*Including our header file*/
void main()
{
int n=24, A=25,B=20;
clrscr();
/*  Function Calling*/
printf("\n Sum of digits of n= %d", DigiSum(n));
printf("\n A+B=%d ",Sum2Num(A,B));
printf("\n A*B=%d ",Mul2Num(A,B));
getch();


}