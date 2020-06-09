// Function to calculate sum of digits of a number.
int DigiSum(int n)
{
	int sum=0,temp;
	while(n>0)
	{
		temp=n%10;
		sum=sum+temp;
		n=n-temp;
		n=n/10;
	}
	return(sum);
}
//  function to add two numbers.

int Sum2Num(int num1, int num2)
{
	return(num1+num2);
	
}
//  function to multiply two numbers.

int Mul2Num(int num1, int num2)
{
	return(num1*num2);
	
}

