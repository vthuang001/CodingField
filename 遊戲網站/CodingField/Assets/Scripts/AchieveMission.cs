using UnityEngine;
using System.Collections;

public class AchieveMission : MonoBehaviour {
	
	public GameObject AchieveMissionObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		AchieveMissionObject.SetActive (true);
	}
	
	public void disappear()
	{
		AchieveMissionObject.SetActive (false);
	}
}