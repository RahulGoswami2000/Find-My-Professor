const stars= document.querySelector(".box").children;
const ratingvalue= document.querySelector(#ratingvalue);
Let index;
for(Let i=0; i<stars.length; i++)
{
	stars[i].addEventListener("mouseover",function()
	{
		//console.log(i)
		for(Let j=0; j<stars.length; j++)
		{
			stars[j].classList.remove("fa-star-o");
			stars[j].classList.add("fa-star");
		}
		for(Let j=0; j<=i; j++)
		{
			stars[j].classList.remove("fa-star-o");
			stars[j].classList.add("fa-star");	
		}
	})
	stars[i].addEventListener("click",function()
	{
		ratingvalue.value=i+1;
		index=i;
	})
	stars[i].addEventListener("mouseout",function()
	{
		//console.log(i)
		for(Let j=0; j<stars.length; j++)
		{
			stars[j].classList.remove("fa-star-o");
			stars[j].classList.add("fa-star");
		}
		for(Let j=0; j<=index; j++)
		{
			stars[j].classList.remove("fa-star-o");
			stars[j].classList.add("fa-star");	
		}
	})
)