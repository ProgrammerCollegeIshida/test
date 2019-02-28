
public class SmartPhone extends Phone implements Mp3Player, NewFunction{
	public void play(){
		System.out.println("play");
	}

	public void stop(){
		System.out.println("stop");
	}

	public void next(){
		System.out.println("next");
	}

	public void back(){
		System.out.println("back");
	}
}
