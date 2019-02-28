
public class Test {

	public static void main(String[] args) {

		Robot instance0 = new Robot();
		instance0.name ="aibo";

		Robot instance1 = new Robot();
		instance1.name = "asimo";

		Robot instance2 = new Robot();
		instance2.name = "pepper";

		instance0.talk();

		instance1.walk();

		instance2.run();

	}

}
