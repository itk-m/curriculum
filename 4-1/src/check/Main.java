package check;
import constants.Constants;



public class Main {

	 
	 public static void main(String [] args){
		 
	  printName("松本","樹");
	  	
	  	  Pet pet = new Pet(Constants.CHECK_CLASS_JAVA,Constants.CHECK_CLASS_HOGE);
	  	  pet.introduce();

	  RobotPet robotPet = new RobotPet(Constants.CHECK_CLASS_R2D2,Constants.CHECK_CLASS_LUKE);
	  robotPet.introduce();
	 
	 
	  
	 } 


	
	 private String firstName;
	 private String lastName;

	 
	 
	 private static void printName(String firstName,String lastName){
	 String fullname =firstName +  lastName;
	 System.out.println(fullname);
	 
	  
	 }

}
