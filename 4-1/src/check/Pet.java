package check;

public class Pet {

    private String name;
    private String masterName;

    //仮引数を指定
    public Pet(String name, String masterName) {
        this.name = name;//上記のString name;を指定
        this.masterName = masterName;//上記のString masterName;を指定
    }

    protected String getName() {
        return name;
    }

    protected String getMasterName() {
        return masterName;
    }

    public void introduce() {
        System.out.println("■僕の名前は" + name + "です");
        System.out.println("■ご主人様は" + masterName + "です");
    }
}

class RobotPet extends Pet {
    public RobotPet(String name, String masterName) {
        super(name, masterName);//継承元の呼び出し
    }

    public void introduce() {
        System.out.println("◇私はロボット。名前は" + getName() + "。");
        System.out.println("◇ご主人様は" + getMasterName() + "。");
    }
}
