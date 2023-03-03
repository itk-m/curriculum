package check;
import constants.Constants;



public class Main {

	 
	 public static void main(String [] args){
	  printName("松本","樹");
	  String CHECK_CLASS_JAVA = "java吉";
	  String CHECK_CLASS_HOGE = "hoge";
	  String CHECK_CLASS_R2D2 = "R2D2";
	  String CHECK_CLASS_LUKE = "ルーク";

	  Pet pet = new Pet(CHECK_CLASS_JAVA,CHECK_CLASS_HOGE);
	  pet.introduce();

	  RobotPet robotPet = new RobotPet(CHECK_CLASS_R2D2, CHECK_CLASS_LUKE);
	  robotPet.introduce();
	 
	 
	  
	 } 


	
	 private String firstName;
	 private String lastName;

	 
	 
	 private static void printName(String firstName,String lastName){
	 String fullname =firstName +  lastName;
	 System.out.println(fullname);
	 
	  
	 }

}
