
public class Test {

	public static void main(String[] args) {
		Person taro = new Person();
		taro.name = "山田　太郎";
		taro.age = 20;
		taro.phoneNumber="090-1234-1234";
		taro.address="Chiba";

		Person instance1=new Person();
		instance1.name="木村　次郎";
		instance1.age=18;
		instance1.phoneNumber="080-9876-5432";
		instance1.address="Saitama";

		Person instance2=new Person();
		instance2.name="鈴木　花子";
		instance2.age=16;
		instance2.phoneNumber="070-7777-7777";
		instance2.address="Kanagawa";

		Person instance3=new Person();
		instance3.name="石田　航大";
		instance3.age=23;
		instance3.phoneNumber="03-0000-0000";
		instance3.address="Tokyo";


		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);
		taro.talk();
		taro.walk();

		System.out.println(instance1.name);
		System.out.println(instance1.age);
		System.out.println(instance1.phoneNumber);
		System.out.println(instance1.address);

		System.out.println(instance2.name);
		System.out.println(instance2.age);
		System.out.println(instance2.phoneNumber);
		System.out.println(instance2.address);

		System.out.println(instance3.name);
		System.out.println(instance3.age);
		System.out.println(instance3.phoneNumber);
		System.out.println(instance3.address);



	}

}
