using UnityEngine;
using System.Collections;

public class CollectAchieve : MonoBehaviour {

    public GameObject CollectAchieveObject;
    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

    }

    public void appear()
    {
        CollectAchieveObject.SetActive(true);
    }

    public void disappear()
    {
        CollectAchieveObject.SetActive(false);
    }
}