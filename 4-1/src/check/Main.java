package check;
import constants.Constants;



public class Main {

	private String firstName = "松本";
	private String lastName ="樹";
	
	private void printName(){
	System.out.println(firstName +  lastName);
	
	}
	 
	 public static void main(String [] args){
		 
				Main name = new Main();
				name.printName();
	  	
	  	  Pet pet = new Pet(Constants.CHECK_CLASS_JAVA,Constants.CHECK_CLASS_HOGE);
	  	  pet.introduce();

	  RobotPet robotPet = new RobotPet(Constants.CHECK_CLASS_R2D2,Constants.CHECK_CLASS_LUKE);
	  robotPet.introduce();
	 
	 
	  
	 } 


}
