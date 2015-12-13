using UnityEngine;
using System.Collections;

public class MissionDaily : MonoBehaviour {
	
	public GameObject MossionDailyObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		MossionDailyObject.SetActive (true);
	}
	
	public void disappear()
	{
		MossionDailyObject.SetActive (false);
	}
}