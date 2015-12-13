using UnityEngine;
using System.Collections;

public class AchieveSocial : MonoBehaviour {
	
	public GameObject AchieveSocialObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		AchieveSocialObject.SetActive (true);
	}
	
	public void disappear()
	{
		AchieveSocialObject.SetActive (false);
	}
}